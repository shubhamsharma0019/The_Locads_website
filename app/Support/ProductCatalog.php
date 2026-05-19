<?php

namespace App\Support;

use App\Models\Product;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class ProductCatalog
{
    public function ensureDefaultProducts(): void
    {
        foreach ($this->defaultProducts() as $product) {
            $productAttributes = collect($product)->except('legacy_slugs')->all();

            $existingProduct = Product::query()
                ->where('slug', $productAttributes['slug'])
                ->orWhere('sku', $productAttributes['sku'])
                ->first();

            if (!$existingProduct) {
                Product::query()->create($productAttributes);
                continue;
            }

            $updates = [];

            if (in_array($existingProduct->slug, $product['legacy_slugs'] ?? [], true)
                && !Product::query()->where('slug', $productAttributes['slug'])->whereKeyNot($existingProduct->getKey())->exists()) {
                $updates['slug'] = $productAttributes['slug'];
            }

            if (in_array($existingProduct->image_path, [null, '', 'icons/ledimage.jpg'], true)) {
                $updates['image_path'] = $productAttributes['image_path'];
            }

            if ($this->hasPricingSpecifications($existingProduct->specifications ?? [])
                || $this->hasLegacyDefaultSpecifications($existingProduct->specifications ?? [])) {
                $updates['specifications'] = $productAttributes['specifications'];
            }

            if ($updates !== []) {
                $existingProduct->fill($updates)->save();
            }
        }
    }

    public function ensureDefaultRentalProducts(): void
    {
        $this->ensureDefaultProducts();
    }

    public function all(): Collection
    {
        return Product::query()
            ->orderByDesc('created_at')
            ->get()
            ->map(fn (Product $product) => $this->serializeProduct($product));
    }

    public function normalProducts(): Collection
    {
        return $this->all()->where('type', 'product')->values();
    }

    public function normalProductsForPublicPages(): Collection
    {
        return $this->normalProducts()
            ->reject(fn (array $product) => in_array($product['slug'], $this->seededSlugs(), true))
            ->values();
    }

    public function rentProducts(): Collection
    {
        return $this->all()->where('type', 'rent')->values();
    }

    public function byCategory(string $category): Collection
    {
        return $this->byCategories([$category]);
    }

    public function byCategories(array $categories): Collection
    {
        $normalizedCategories = collect($categories)
            ->map(fn (mixed $category) => Str::lower(trim((string) $category)))
            ->filter()
            ->values();

        return $this->all()
            ->filter(function (array $product) use ($normalizedCategories) {
                $productCategory = Str::lower(trim((string) ($product['category'] ?? '')));

                return $productCategory !== '' && $normalizedCategories->contains($productCategory);
            })
            ->values();
    }

    public function rentProductsForPublicPages(): Collection
    {
        return $this->rentProducts()
            ->reject(fn (array $product) => in_array($product['slug'], $this->seededSlugs(), true))
            ->values();
    }

    public function allForPublicPages(): Collection
    {
        return $this->all()
            ->reject(fn (array $product) => in_array($product['slug'], $this->seededSlugs(), true))
            ->values();
    }

    public function byCategoriesForPublicPages(array $categories): Collection
    {
        $normalizedCategories = collect($categories)
            ->map(fn (mixed $category) => Str::lower(trim((string) $category)))
            ->filter()
            ->values();

        return $this->allForPublicPages()
            ->filter(function (array $product) use ($normalizedCategories) {
                $productCategory = Str::lower(trim((string) ($product['category'] ?? '')));

                return $productCategory !== '' && $normalizedCategories->contains($productCategory);
            })
            ->values();
    }

    public function find(string $id): ?array
    {
        return $this->all()->firstWhere('id', $id);
    }

    public function findBySlug(string $slug): ?array
    {
        return $this->all()->firstWhere('slug', $slug);
    }

    public function create(array $attributes, ?UploadedFile $image = null): array
    {
        $product = $this->mapAttributes($attributes);
        $product['slug'] = $this->makeUniqueSlug(
            $product['name'],
            Product::query()->pluck('slug')->all()
        );
        $product['image_path'] = $image ? $this->storeImage($image) : null;

        return $this->serializeProduct(Product::query()->create($product));
    }

    public function update(string $id, array $attributes, ?UploadedFile $image = null): ?array
    {
        $product = Product::query()->find($id);

        if (!$product) {
            return null;
        }

        $updatedProduct = $this->mapAttributes($attributes);
        $updatedProduct['slug'] = $this->makeUniqueSlug(
            $updatedProduct['name'],
            Product::query()->whereKeyNot($product->getKey())->pluck('slug')->all()
        );

        if ($image) {
            $this->deleteImage($product->image_path);
            $updatedProduct['image_path'] = $this->storeImage($image);
        }

        $product->fill($updatedProduct)->save();

        return $this->serializeProduct($product->fresh());
    }

    public function delete(string $id): bool
    {
        $product = Product::query()->find($id);

        if (!$product) {
            return false;
        }

        $this->deleteImage($product->image_path);
        $product->delete();

        return true;
    }

    public function stats(): array
    {
        $products = $this->all();

        return [
            'total' => $products->count(),
            'active' => $products->where('status', 'active')->count(),
            'inactive' => $products->where('status', 'inactive')->count(),
            'categories' => $products->pluck('category')->filter()->unique()->count(),
            'product' => $products->where('type', 'product')->count(),
            'rent' => $products->where('type', 'rent')->count(),
        ];
    }

    public function categories(): array
    {
        $savedCategories = $this->all()->pluck('category')->filter()->unique()->values()->all();
        $defaultCategories = [
            'Indoor Display',
            'Outdoor Display',
            'Media Player',
            'Software',
        ];

        return collect(array_merge($defaultCategories, $savedCategories))
            ->reject(fn (string $category) => in_array(Str::lower($category), [
                'kiosk',
                'video wall',
            ], true))
            ->unique(fn (string $category) => Str::lower($category))
            ->values()
            ->all();
    }

    private function mapAttributes(array $attributes): array
    {
        return [
            'type' => $attributes['type'],
            'name' => $this->sentenceCase($attributes['name']),
            'sku' => trim((string) ($attributes['sku'] ?? '')),
            'category' => $this->sentenceCase($attributes['category']),
            'status' => trim((string) ($attributes['status'] ?? 'active')),
            'price' => $this->numericOrNull($attributes['price'] ?? null),
            'rent_price' => $this->numericOrNull($attributes['rent_price'] ?? null),
            'billing_period' => trim((string) ($attributes['billing_period'] ?? 'month')),
            'best_for' => $this->sentenceCase($attributes['best_for'] ?? ''),
            'short_description' => $this->sentenceCase($attributes['short_description'] ?? ''),
            'description' => $this->sentenceCase($attributes['description'] ?? ''),
            'features' => $this->stringToList($attributes['features'] ?? ''),
            'specifications' => $this->stringToList($attributes['specifications'] ?? ''),
        ];
    }

    private function sentenceCase(mixed $value): string
    {
        $value = trim((string) $value);

        if ($value === '') {
            return '';
        }

        $lowercaseValue = Str::lower($value);

        return preg_replace_callback(
            '/(^|[.!?]\s+)([^a-z]*)([a-z])/',
            fn (array $matches) => $matches[1] . $matches[2] . Str::upper($matches[3]),
            $lowercaseValue
        ) ?? $lowercaseValue;
    }

    private function numericOrNull(mixed $value): ?float
    {
        if ($value === null || $value === '') {
            return null;
        }

        return (float) $value;
    }

    private function stringToList(string $value): array
    {
        return collect(preg_split('/\r\n|\r|\n/', $value) ?: [])
            ->map(fn (string $item) => $this->sentenceCase($item))
            ->filter()
            ->values()
            ->all();
    }

    private function makeUniqueSlug(string $name, array $existingSlugs): string
    {
        $baseSlug = Str::slug($name) ?: Str::random(8);
        $slug = $baseSlug;
        $counter = 2;

        while (in_array($slug, $existingSlugs, true)) {
            $slug = $baseSlug . '-' . $counter;
            $counter++;
        }

        return $slug;
    }

    private function storeImage(UploadedFile $image): string
    {
        $directory = public_path('uploads/products');
        File::ensureDirectoryExists($directory);

        $filename = now()->format('YmdHis') . '-' . Str::random(8) . '.' . $image->getClientOriginalExtension();
        $image->move($directory, $filename);

        return 'uploads/products/' . $filename;
    }

    private function deleteImage(?string $imagePath): void
    {
        if (!$imagePath || !Str::startsWith($imagePath, 'uploads/products/')) {
            return;
        }

        $fullPath = public_path($imagePath);

        if (File::exists($fullPath)) {
            File::delete($fullPath);
        }
    }

    private function serializeProduct(Product $product): array
    {
        return [
            'id' => (string) $product->getKey(),
            'type' => $product->type,
            'name' => $product->name,
            'slug' => $product->slug,
            'sku' => $product->sku,
            'category' => $product->category,
            'status' => $product->status,
            'price' => $product->price,
            'rent_price' => $product->rent_price,
            'billing_period' => $product->billing_period,
            'best_for' => $product->best_for,
            'short_description' => $product->short_description,
            'description' => $product->description,
            'features' => $product->features ?? [],
            'specifications' => $product->specifications ?? [],
            'image_path' => $product->image_path,
            'created_at' => optional($product->created_at)?->toIso8601String(),
            'updated_at' => optional($product->updated_at)?->toIso8601String(),
        ];
    }

    private function hasPricingSpecifications(array $specifications): bool
    {
        return collect($specifications)->contains(function (mixed $specification) {
            $specification = Str::lower(trim((string) $specification));

            return str_starts_with($specification, 'purchase:')
                || str_starts_with($specification, 'rent:');
        });
    }

    private function hasLegacyDefaultSpecifications(array $specifications): bool
    {
        $legacySpecificationSets = [
            ['4k uhd panel', 'commercial grade hardware'],
            ['window-facing commercial panel', 'high brightness mode'],
            ['industrial chassis', 'advanced content playback'],
            ['annual software license', 'cloud platform access'],
        ];

        $normalizedSpecifications = collect($specifications)
            ->map(fn (mixed $specification) => Str::lower(trim((string) $specification)))
            ->filter()
            ->values()
            ->all();

        return collect($legacySpecificationSets)->contains(
            fn (array $legacySpecifications) => $normalizedSpecifications === $legacySpecifications
        );
    }

    private function defaultProducts(): array
    {
        return array_merge([
            [
                'type' => 'product',
                'name' => 'Pro Series 4K Display',
                'slug' => 'pro-series-4k-displays',
                'legacy_slugs' => [],
                'sku' => 'PRO-4K-DISPLAY',
                'category' => 'Indoor Display',
                'status' => 'active',
                'price' => 899,
                'rent_price' => null,
                'billing_period' => 'month',
                'best_for' => 'Retail, offices, reception areas',
                'short_description' => 'Commercial-grade indoor 4K display for customer-facing signage environments.',
                'description' => 'Commercial-grade indoor 4K display for retail, corporate, and customer-facing signage environments.',
                'features' => [
                    '4K UHD commercial panel',
                    'Slim bezel design',
                    'High reliability for daily signage',
                    'Portrait and landscape installation',
                ],
                'specifications' => [
                    'Display Type: Indoor commercial display',
                    'Screen Sizes: 43 inch, 55 inch, 65 inch, 75 inch, 85 inch',
                    'Resolution: 4K UHD',
                    'Brightness: 500 nits',
                    'Operation Rating: 24/7 commercial operation',
                    'Orientation: Portrait and landscape',
                ],
                'image_path' => 'icons/commercial1.jpg',
            ],
            [
                'type' => 'product',
                'name' => 'High-Bright Window Display',
                'slug' => 'high-bright-window-displays',
                'legacy_slugs' => [],
                'sku' => 'HIGH-BRIGHT-WINDOW',
                'category' => 'Outdoor Display',
                'status' => 'active',
                'price' => 1499,
                'rent_price' => null,
                'billing_period' => 'month',
                'best_for' => 'Storefronts, windows, semi-outdoor areas',
                'short_description' => 'High-bright display for visible window-facing and outdoor signage.',
                'description' => 'High-bright window display designed for storefronts, retail windows, and semi-outdoor visibility.',
                'features' => [
                    'High brightness panel',
                    'Anti-glare visibility',
                    'Window-facing deployment',
                    'Commercial-grade operation',
                ],
                'specifications' => [
                    'Display Type: High-bright window display',
                    'Screen Sizes: 55 inch, 65 inch, 75 inch',
                    'Brightness: 3000 to 4000 nits',
                    'Readability: Direct sunlight readable',
                    'Thermal Control: Built-in thermal management',
                    'Orientation: Portrait and landscape',
                ],
                'image_path' => 'icons/outdoorimage.jpg',
            ],
            [
                'type' => 'product',
                'name' => 'Edge Media Player',
                'slug' => 'edge-media-players',
                'legacy_slugs' => [],
                'sku' => 'EDGE-MEDIA-PLAYER',
                'category' => 'Media Player',
                'status' => 'active',
                'price' => 699,
                'rent_price' => null,
                'billing_period' => 'month',
                'best_for' => 'CMS playback and signage control',
                'short_description' => 'Compact signage media player for reliable content playback.',
                'description' => 'Compact edge media player for reliable content playback, scheduling, and CMS-led signage campaigns.',
                'features' => [
                    'Compact media player',
                    'CMS-compatible playback',
                    'Reliable signage performance',
                    'Configured for playback needs',
                ],
                'specifications' => [
                    'Device Type: Media player',
                    'Processor Options: Intel Core i5 and i7',
                    'Output Resolution: 4K and 8K playback support',
                    'Chassis: Fanless industrial design',
                    'Connectivity: Ethernet, Wi-Fi, and optional 5G',
                    'Playback: CMS-compatible signage playback',
                ],
                'image_path' => 'icons/mediaimage.jpg',
            ],
            [
                'type' => 'product',
                'name' => 'Cloud CMS License (Annual)',
                'slug' => 'cloud-cms-license-annual-rent',
                'legacy_slugs' => [],
                'sku' => 'CLOUD-CMS-ANNUAL',
                'category' => 'Software',
                'status' => 'active',
                'price' => 299,
                'rent_price' => null,
                'billing_period' => 'year',
                'best_for' => 'Remote signage content management',
                'short_description' => 'Cloud-based annual CMS license for digital signage management.',
                'description' => 'Full-featured cloud-based content management system for digital signage.',
                'features' => [
                    'Unlimited content uploads',
                    'Real-time remote updates',
                    'Advanced scheduling',
                    'Analytics dashboard',
                ],
                'specifications' => [
                    'License Type: Annual cloud CMS',
                    'Deployment: Cloud-hosted signage management',
                    'Content Management: Remote upload and playlist control',
                    'Scheduling: Day-parting and campaign scheduling',
                    'Users: Multi-user access',
                    'Support: Email support included',
                ],
                'image_path' => 'icons/softwareimage.jpg',
            ],
            [
                'type' => 'product',
                'name' => 'Pen Drive Software Licence',
                'slug' => 'pen-drive-software-licence',
                'legacy_slugs' => [],
                'sku' => 'PENDRIVE-LICENCE',
                'category' => 'Software',
                'status' => 'active',
                'price' => 899,
                'rent_price' => null,
                'billing_period' => 'year',
                'best_for' => 'Offline signage playback',
                'short_description' => 'Offline software licence for pen-drive based signage playback.',
                'description' => 'Offline signage software licence for pen-drive based media playback and screen updates.',
                'features' => [
                    'Offline playback support',
                    'Pen-drive based updates',
                    'Easy local content changes',
                    'Simple setup workflow',
                ],
                'specifications' => [
                    'License Type: Offline software licence',
                    'Playback Mode: USB and pen-drive based media playback',
                    'Content Updates: Manual USB content update',
                    'Connectivity: Offline operation supported',
                    'Deployment: Standalone signage screens',
                    'Support: Setup support included',
                ],
                'image_path' => 'icons/softwareimage.jpg',
            ],
        ], $this->defaultRentalProducts());
    }

    private function defaultRentalProducts(): array
    {
        return [
            [
                'type' => 'rent',
                'name' => 'Pro Series 4K Display - 43" Rent',
                'slug' => 'pro-series-4k-display-43-rent',
                'legacy_slugs' => ['pro-series-4k-display-43'],
                'sku' => 'PRO-4K-43-RENT',
                'category' => 'Indoor Display',
                'status' => 'active',
                'price' => null,
                'rent_price' => 49,
                'billing_period' => 'month',
                'best_for' => 'Events, launches, and temporary retail signage',
                'short_description' => 'Rental-ready 43 inch 4K display package for temporary signage needs.',
                'description' => 'Rental-ready 43 inch 4K display package for events, campaigns, retail activations, and temporary signage needs.',
                'features' => [
                    '43 inch 4K UHD display',
                    'Short-term rental friendly',
                    'Delivery and setup support',
                    'Great for events and launches',
                ],
                'specifications' => [
                    'Rental Type: Indoor display rental',
                    'Size: 43 inch',
                    'Resolution: 4K UHD',
                    'Brightness: 500 nits',
                    'Operating System: Android signage OS',
                    'Orientation: Portrait and landscape',
                ],
                'image_path' => 'icons/commercial2.jpg',
            ],
            [
                'type' => 'rent',
                'name' => 'High-Bright Window Display - 55" Rent',
                'slug' => 'high-bright-window-display-55-rent',
                'legacy_slugs' => [],
                'sku' => 'HB-WINDOW-55-RENT',
                'category' => 'Outdoor Display',
                'status' => 'active',
                'price' => null,
                'rent_price' => 49,
                'billing_period' => 'month',
                'best_for' => 'Storefront campaigns and outdoor-facing promotions',
                'short_description' => 'High-bright 55 inch window display for storefront campaigns and events.',
                'description' => 'Rental-ready high-bright 55 inch window display for storefront campaigns, outdoor-facing promotions, and events.',
                'features' => [
                    '55 inch high-bright rental display',
                    'Great for storefront campaigns',
                    'Temporary promotion friendly',
                    'Visible in bright environments',
                ],
                'specifications' => [
                    'Rental Type: Window display rental',
                    'Size: 55 inch',
                    'Brightness: High-bright display',
                    'Readability: Window-facing daylight visibility',
                    'Deployment: Temporary storefront and event signage',
                    'Orientation: Portrait and landscape',
                ],
                'image_path' => 'icons/outdoorimage.jpg',
            ],
            [
                'type' => 'rent',
                'name' => 'Edge Media Player - i5 Rent',
                'slug' => 'edge-media-player-i5-rent',
                'legacy_slugs' => [],
                'sku' => 'EDGE-I5-RENT',
                'category' => 'Media Player',
                'status' => 'active',
                'price' => null,
                'rent_price' => 49,
                'billing_period' => 'month',
                'best_for' => 'Events and temporary screen deployments',
                'short_description' => 'Rental-ready edge media player for events and short-term signage projects.',
                'description' => 'Rental-ready edge media player for temporary screen deployments, events, and short-term signage projects.',
                'features' => [
                    'i5 media player rental',
                    'Temporary signage deployment',
                    'Configured for playback needs',
                    'Works with CMS-led campaigns',
                ],
                'specifications' => [
                    'Rental Type: Media player rental',
                    'Processor: Intel i5 class',
                    'Output Resolution: 4K playback support',
                    'Connectivity: Ethernet and Wi-Fi',
                    'Deployment: Temporary screen playback support',
                    'Playback: CMS-compatible media playback',
                ],
                'image_path' => 'icons/mediaimage.jpg',
            ],
        ];
    }

    private function seededSlugs(): array
    {
        return [
            'pro-series-4k-displays',
            'high-bright-window-displays',
            'edge-media-players',
            'pro-series-4k-display-43-rent',
            'high-bright-window-display-55-rent',
            'edge-media-player-i5-rent',
            'cloud-cms-license-annual-rent',
        ];
    }
}
