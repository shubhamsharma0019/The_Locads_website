<?php

namespace App\Http\Controllers;

use App\Models\License;
use App\Services\LicenseService;
use App\Support\ProductCatalog;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class LicenseController extends Controller
{
    public function store(Request $request, LicenseService $licenseService, ProductCatalog $catalog): JsonResponse|RedirectResponse
    {
        $data = $request->validate([
            'mac_number' => ['required', 'string', 'max:100'],
            'product_slug' => ['required', 'string', 'max:255'],
            'product_name' => ['nullable', 'string', 'max:255'],
        ]);

        if (!$this->canGenerateLicenseForProduct($data['product_slug'], $catalog)) {
            if ($request->expectsJson()) {
                return response()->json([
                    'message' => 'Activation key sirf software aur licence products ke liye generate ho sakti hai.',
                    'errors' => [
                        'product_slug' => ['Activation key sirf software aur licence products ke liye generate ho sakti hai.'],
                    ],
                ], 422);
            }

            return back()
                ->withErrors(['product_slug' => 'Activation key sirf software aur licence products ke liye generate ho sakti hai.'])
                ->withInput();
        }

        $macNumber = $licenseService->normalizeMachineId($data['mac_number']);
        $activationKey = $licenseService->generateLicense($macNumber);

        License::query()->updateOrCreate(
            ['mac_number' => $macNumber],
            [
                'activation_key' => $activationKey,
                'product_slug' => $data['product_slug'] ?? null,
                'product_name' => $data['product_name'] ?? null,
            ]
        );

        if ($request->expectsJson()) {
            return response()->json([
                'activation_key' => $activationKey,
                'activation_mac' => $macNumber,
                'message' => 'Activation key generated.',
            ]);
        }

        return back()->with([
            'activation_key' => $activationKey,
            'activation_mac' => $macNumber,
        ]);
    }

    public function verify(Request $request, LicenseService $licenseService): JsonResponse
    {
        $data = $request->validate([
            'mac_number' => ['required', 'string', 'max:100'],
            'activation_key' => ['required', 'string', 'max:50'],
        ]);

        $macNumber = $licenseService->normalizeMachineId($data['mac_number']);
        $activationKey = strtoupper(trim($data['activation_key']));
        $isValid = $licenseService->verifyLicense($macNumber, $activationKey)
            && License::query()
                ->where('mac_number', $macNumber)
                ->where('activation_key', $activationKey)
                ->exists();

        if ($isValid) {
            License::query()
                ->where('mac_number', $macNumber)
                ->where('activation_key', $activationKey)
                ->update(['last_verified_at' => now()]);
        }

        return response()->json([
            'authenticated' => $isValid,
            'message' => $isValid ? 'Activation key verified.' : 'Invalid activation key.',
        ], $isValid ? 200 : 422);
    }

    private function canGenerateLicenseForProduct(string $productSlug, ProductCatalog $catalog): bool
    {
        if (in_array($productSlug, [
            'cloud-cms-license-annual-rent',
            'pen-drive-software-licence',
        ], true)) {
            return true;
        }

        $product = $catalog->findBySlug($productSlug);

        if (!$product) {
            return false;
        }

        $category = Str::lower((string) ($product['category'] ?? ''));

        return str_contains($category, 'software')
            || str_contains($category, 'license')
            || str_contains($category, 'licence');
    }
}
