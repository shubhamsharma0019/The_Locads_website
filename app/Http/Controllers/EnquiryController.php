<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEnquiryRequest;
use App\Models\Enquiry;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Rule;
use Illuminate\View\View;
use Throwable;

class EnquiryController extends Controller
{
    public function index(): View
    {
        $enquiries = Enquiry::query()
            ->latest()
            ->get()
            ->map(fn (Enquiry $enquiry) => [
                'id' => $enquiry->id,
                'first_name' => $enquiry->first_name,
                'last_name' => $enquiry->last_name,
                'email' => $enquiry->email,
                'company_name' => $enquiry->company_name,
                'message' => $enquiry->message,
                'enquiry_type' => $enquiry->enquiry_type,
                'source_page' => $enquiry->source_page,
                'created_at' => optional($enquiry->created_at)->format('d M Y, h:i A'),
            ])
            ->values()
            ->all();

        $stats = [
            'total' => count($enquiries),
            'sell' => count(array_filter($enquiries, fn (array $enquiry) => $enquiry['enquiry_type'] === 'sell')),
            'rent' => count(array_filter($enquiries, fn (array $enquiry) => $enquiry['enquiry_type'] === 'rent')),
            'ticket' => count(array_filter($enquiries, fn (array $enquiry) => $enquiry['enquiry_type'] === 'ticket')),
        ];

        $sources = array_values(array_unique(array_filter(array_map(
            fn (array $enquiry) => $enquiry['source_page'],
            $enquiries
        ))));
        sort($sources);

        return view('pages.enquiries.index', [
            'enquiries' => $enquiries,
            'stats' => $stats,
            'sources' => $sources,
        ]);
    }

    public function store(StoreEnquiryRequest $request): RedirectResponse
    {
        $data = $request->validated();
        foreach ($this->detectEnquiryTypes($data['message']) as $enquiryType) {
            Enquiry::query()->create($data + ['enquiry_type' => $enquiryType]);
        }

        if ($data['source_page'] === 'Blog Newsletter') {
            $this->notifyNewsletterSubscription($data);
        }

        return back()->with('contact_success', true);
    }

    public function update(Request $request, Enquiry $enquiry): RedirectResponse
    {
        $data = $request->validate([
            'first_name' => ['required', 'string', 'max:100'],
            'last_name' => ['required', 'string', 'max:100'],
            'email' => ['required', 'email', 'max:255'],
            'company_name' => ['nullable', 'string', 'max:255'],
            'message' => ['required', 'string', 'max:2000'],
            'source_page' => ['required', 'string', 'max:50'],
            'enquiry_type' => ['required', Rule::in(['sell', 'rent', 'ticket'])],
        ]);

        $enquiry->update($data);

        return redirect()
            ->route('enquiries.index', $request->only(['type', 'source']))
            ->with('enquiry_updated', true);
    }

    private function notifyNewsletterSubscription(array $data): void
    {
        try {
            Mail::raw(
                "New newsletter subscription received.\n\nEmail: {$data['email']}\nSource: {$data['source_page']}",
                function ($message) use ($data) {
                    $message
                        ->to('info@thelocads.com')
                        ->replyTo($data['email'])
                        ->subject('New Newsletter Subscription - The Locads');
                }
            );
        } catch (Throwable $exception) {
            report($exception);
        }
    }

    private function detectEnquiryTypes(string $message): array
    {
        $normalized = strtolower($message);
        $detectedTypes = [];

        if ($this->containsAny($normalized, ['ticket', 'support ticket', 'service ticket'])) {
            $detectedTypes[] = 'ticket';
        }

        if ($this->containsAny($normalized, ['rent enquiry', 'for rent', 'rental enquiry', 'rental', 'rent'])) {
            $detectedTypes[] = 'rent';
        }

        if ($this->containsAny($normalized, ['sell enquiry', 'for sale', 'sale enquiry', 'sell', 'sale', 'buy', 'purchase'])) {
            $detectedTypes[] = 'sell';
        }

        return $detectedTypes !== [] ? array_values(array_unique($detectedTypes)) : ['sell'];
    }

    private function containsAny(string $message, array $needles): bool
    {
        foreach ($needles as $needle) {
            if (str_contains($message, $needle)) {
                return true;
            }
        }

        return false;
    }
}
