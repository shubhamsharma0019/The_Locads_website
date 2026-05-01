<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $products = $this->defaultProducts()
            ->merge($this->legacyFileProducts())
            ->unique(fn (array $product) => $product['type'] . '|' . $product['name'])
            ->values();

        foreach ($products as $product) {
            Product::updateOrCreate(
                ['slug' => $product['slug']],
                $product
            );
        }
    }

    private function defaultProducts(): Collection
    {
        return collect([
            [
                'type' => 'product',
                'name' => 'Pro Series 4K Displays',
                'slug' => 'pro-series-4k-displays',
                'sku' => 'PRO-4K-DISPLAYS',
                'category' => 'Indoor Display',
                'status' => 'active',
                'price' => 899,
                'rent_price' => null,
                'billing_period' => null,
                'best_for' => 'Retail, Corporate, Hospitality',
                'short_description' => 'Commercial-grade 4K displays for always-on digital signage.',
                'description' => 'A premium commercial display range built for reliable signage deployments across stores, offices, and hospitality locations.',
                'features' => ['43", 55", 65", 75", 85"', '500-700 nits brightness', '24/7 Operation Rating', 'Anti-glare coating'],
                'specifications' => ['4K UHD panel', 'Commercial grade hardware'],
                'image_path' => 'icons/service1div.jpg',
            ],
            [
                'type' => 'product',
                'name' => 'High-Bright Window Displays',
                'slug' => 'high-bright-window-displays',
                'sku' => 'HIGH-BRIGHT-WINDOW',
                'category' => 'Outdoor Display',
                'status' => 'active',
                'price' => 1199,
                'rent_price' => null,
                'billing_period' => null,
                'best_for' => 'Storefronts, QSR Drive-thru',
                'short_description' => 'High-brightness window displays that stay visible even in direct sunlight.',
                'description' => 'Ideal for storefront and street-facing signage where readability and thermal stability matter most.',
                'features' => ['55", 65", 75"', '3000-4000 nits brightness', 'Direct sunlight readable', 'Thermal management'],
                'specifications' => ['Window-facing commercial panel', 'High brightness mode'],
                'image_path' => 'icons/service2div.jpg',
            ],
            [
                'type' => 'product',
                'name' => 'Edge Media Players',
                'slug' => 'edge-media-players',
                'sku' => 'EDGE-MEDIA-PLAYERS',
                'category' => 'Media Player',
                'status' => 'active',
                'price' => 699,
                'rent_price' => null,
                'billing_period' => null,
                'best_for' => 'Video walls, Heavy content processing',
                'short_description' => 'Powerful media players built for heavy digital signage content and video walls.',
                'description' => 'Industrial-grade media players designed for demanding digital signage environments and advanced playback needs.',
                'features' => ['4K/8K Output', 'Fanless industrial design', 'Intel Core i5/i7 options', 'Cellular 5G connectivity'],
                'specifications' => ['Industrial chassis', 'Advanced content playback'],
                'image_path' => 'icons/service3div.jpg',
            ],
            [
                'type' => 'rent',
                'name' => 'Pro Series 4K Display - 43"',
                'slug' => 'pro-series-4k-display-43-rent',
                'sku' => 'PRO-4K-43-RENT',
                'category' => 'Indoor Display',
                'status' => 'active',
                'price' => 899,
                'rent_price' => 49,
                'billing_period' => 'month',
                'best_for' => 'Retail, corporate, temporary campaigns',
                'short_description' => 'Rent-ready 43 inch 4K commercial signage display.',
                'description' => 'A compact signage display option for monthly deployments and flexible rental programs.',
                'features' => ['43" 4K UHD', '500 nits brightness', 'Android OS', 'Commercial signage ready'],
                'specifications' => ['Purchase: $899', 'Rent: $49/month'],
                'image_path' => 'icons/ledimage.jpg',
            ],
            [
                'type' => 'rent',
                'name' => 'High-Bright Window Display - 55"',
                'slug' => 'high-bright-window-display-55-rent',
                'sku' => 'HB-WINDOW-55-RENT',
                'category' => 'Outdoor Display',
                'status' => 'active',
                'price' => 1299,
                'rent_price' => 49,
                'billing_period' => 'month',
                'best_for' => 'Storefront promotions and street visibility',
                'short_description' => 'Rental-friendly high-bright signage display for storefront windows.',
                'description' => 'Designed for high-visibility placements where standard indoor panels are not enough.',
                'features' => ['55" commercial panel', 'High brightness output', 'Window-facing signage', 'Rental deployment ready'],
                'specifications' => ['Purchase: $1299', 'Rent: $49/month'],
                'image_path' => 'icons/ledimage.jpg',
            ],
            [
                'type' => 'rent',
                'name' => 'Edge Media Player - i5',
                'slug' => 'edge-media-player-i5-rent',
                'sku' => 'EDGE-I5-RENT',
                'category' => 'Media Player',
                'status' => 'active',
                'price' => 799,
                'rent_price' => 49,
                'billing_period' => 'month',
                'best_for' => 'Video walls and complex playback',
                'short_description' => 'Rental media player for demanding signage playback setups.',
                'description' => 'Good for campaigns needing a reliable media player without a full hardware purchase.',
                'features' => ['Intel i5 performance', '4K playback', 'Signage-ready OS', 'Commercial deployment'],
                'specifications' => ['Purchase: $799', 'Rent: $49/month'],
                'image_path' => 'icons/ledimage.jpg',
            ],
            [
                'type' => 'rent',
                'name' => 'Cloud CMS License (Annual)',
                'slug' => 'cloud-cms-license-annual-rent',
                'sku' => 'CMS-ANNUAL',
                'category' => 'Software',
                'status' => 'active',
                'price' => 899,
                'rent_price' => null,
                'billing_period' => null,
                'best_for' => 'Cloud-managed signage networks',
                'short_description' => 'Annual CMS license for managing signage content and scheduling.',
                'description' => 'Centralized content management license for cloud-based signage operations.',
                'features' => ['Cloud content management', 'Scheduling', 'Remote updates', 'Multi-screen support'],
                'specifications' => ['Annual software license', 'Cloud platform access'],
                'image_path' => 'icons/softwareimage.jpg',
            ],
        ]);
    }

    private function legacyFileProducts(): Collection
    {
        $path = storage_path('app/data/product-catalog.json');

        if (!File::exists($path)) {
            return collect();
        }

        $contents = json_decode(File::get($path), true);

        if (!is_array($contents)) {
            return collect();
        }

        return collect($contents)
            ->filter(fn (array $product) => !empty($product['name']) && !empty($product['type']))
            ->map(function (array $product) {
                return [
                    'type' => $product['type'],
                    'name' => $product['name'],
                    'slug' => $product['slug'] ?: Str::slug($product['name']),
                    'sku' => $product['sku'] ?? null,
                    'category' => $product['category'] ?? 'General',
                    'status' => $product['status'] ?? 'active',
                    'price' => $product['price'] ?? null,
                    'rent_price' => $product['rent_price'] ?? null,
                    'billing_period' => $product['billing_period'] ?? null,
                    'best_for' => $product['best_for'] ?? null,
                    'short_description' => $product['short_description'] ?? null,
                    'description' => $product['description'] ?? null,
                    'features' => $product['features'] ?? [],
                    'specifications' => $product['specifications'] ?? [],
                    'image_path' => $product['image_path'] ?? null,
                    'created_at' => $product['created_at'] ?? now(),
                    'updated_at' => $product['updated_at'] ?? now(),
                ];
            });
    }
}
