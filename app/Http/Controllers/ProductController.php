<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Support\ProductCatalog;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProductController extends Controller
{
    public function indexA(ProductCatalog $catalog): View
    {
        $catalog->ensureDefaultProducts();

        return view('pages.products.index-a', [
            'dynamicProducts' => $catalog->normalProducts(),
        ]);
    }

    public function indexB(): View
    {
        return view('pages.products.index-b');
    }

    public function indexC(ProductCatalog $catalog): View
    {
        $catalog->ensureDefaultProducts();

        return view('pages.products.index-c', [
            'createdProducts' => $catalog->all(),
        ]);
    }

    public function indexD(ProductCatalog $catalog): View
    {
        $catalog->ensureDefaultProducts();

        return view('pages.products.index-d', [
            'indoorProducts' => $catalog->byCategories([
                'Indoor Display',
                'Indoor Displays',
                'Indoor',
            ]),
        ]);
    }

    public function indexE(ProductCatalog $catalog): View
    {
        $catalog->ensureDefaultProducts();

        return view('pages.products.index-e', [
            'outdoorProducts' => $catalog->byCategories([
                'Outdoor Display',
                'Outdoor Displays',
                'Outdoor/Window Displays',
                'Outdoor',
                'Window Display',
                'Window Displays',
            ]),
        ]);
    }

    public function indexF(ProductCatalog $catalog): View
    {
        $catalog->ensureDefaultProducts();

        return view('pages.products.index-f', [
            'mediaProducts' => $catalog->byCategories([
                'Media Player',
                'Media Players',
            ]),
        ]);
    }

    public function indexG(ProductCatalog $catalog): View
    {
        $catalog->ensureDefaultProducts();

        return view('pages.products.index-g', [
            'softwareProducts' => $catalog->byCategories([
                'Software',
                'Software & Licenses',
                'Software & Licences',
                'Software License',
                'Software Licence',
                'License',
                'Licence',
            ]),
        ]);
    }

    public function publicRentals(ProductCatalog $catalog): View
    {
        $catalog->ensureDefaultProducts();

        $rentalProducts = $catalog->rentProducts();

        return view('pages.products.rental-products', [
            'rentalProducts' => $rentalProducts,
        ]);
    }

    public function showA(): View
    {
        return view('pages.products.show-a', [
            'productDetail' => $this->seededProductDetail('cloud-cms-license-annual-rent'),
        ]);
    }

    public function showB(): View
    {
        return view('pages.products.show-a', [
            'productDetail' => $this->seededProductDetail('pen-drive-software-licence'),
        ]);
    }

    public function showProduct(Request $request, string $productSlug, ProductCatalog $catalog): View
    {
        $catalog->ensureDefaultProducts();

        $product = $catalog->findBySlug($productSlug)
            ?? $this->seededProductDetail($productSlug);

        abort_if(!$product, 404);

        $detail = $this->detailFromProduct($product);
        $returnTo = $this->resolveReturnTo($request);

        if ($returnTo) {
            $detail['back_route'] = $returnTo;
        }

        return view('pages.products.show-a', [
            'productDetail' => $detail,
        ]);
    }

    public function create(Request $request, ProductCatalog $catalog): View
    {
        $catalog->ensureDefaultProducts();

        $editId = (string) $request->query('edit', '');

        return view('pages.products.create', [
            'products' => $catalog->all(),
            'stats' => $catalog->stats(),
            'categories' => $catalog->categories(),
            'editingProduct' => $editId ? $catalog->find($editId) : null,
        ]);
    }

    public function rentals(Request $request, ProductCatalog $catalog): View
    {
        $catalog->ensureDefaultProducts();

        $editId = (string) $request->query('edit', '');
        $products = $catalog->rentProducts();
        $editingProduct = $editId ? $catalog->find($editId) : null;

        if (($editingProduct['type'] ?? null) !== 'rent') {
            $editingProduct = null;
        }

        return view('pages.products.rentals', [
            'products' => $products,
            'stats' => [
                'total' => $products->count(),
                'active' => $products->where('status', 'active')->count(),
                'inactive' => $products->where('status', 'inactive')->count(),
                'categories' => $products->pluck('category')->filter()->unique()->count(),
            ],
            'categories' => $catalog->categories(),
            'editingProduct' => $editingProduct,
        ]);
    }

    public function store(StoreProductRequest $request, ProductCatalog $catalog): RedirectResponse
    {
        $catalog->create($request->validated(), $request->file('image'));

        return redirect()
            ->to($this->resolveRedirect($request, route('products.create')))
            ->with('success', 'Product created successfully.');
    }

    public function update(UpdateProductRequest $request, string $productId, ProductCatalog $catalog): RedirectResponse
    {
        $product = $catalog->update($productId, $request->validated(), $request->file('image'));

        if (!$product) {
            return redirect()
                ->to($this->resolveRedirect($request, route('products.create')))
                ->with('error', 'Product not found.');
        }

        return redirect()
            ->to($this->resolveRedirect($request, route('products.create')))
            ->with('success', 'Product updated successfully.');
    }

    public function destroy(Request $request, string $productId, ProductCatalog $catalog): RedirectResponse
    {
        $deleted = $catalog->delete($productId);

        return redirect()
            ->to($this->resolveRedirect($request, route('products.create')))
            ->with($deleted ? 'success' : 'error', $deleted ? 'Product deleted successfully.' : 'Product not found.');
    }

    private function resolveRedirect(Request $request, string $fallback): string
    {
        $redirectTo = trim((string) $request->input('redirect_to', ''));

        return $this->isSafeLocalUrl($redirectTo) ? $redirectTo : $fallback;
    }

    private function resolveReturnTo(Request $request): ?string
    {
        $returnTo = trim((string) $request->query('return_to', ''));

        return $this->isSafeLocalUrl($returnTo) ? $returnTo : null;
    }

    private function isSafeLocalUrl(string $url): bool
    {
        if ($url === '') {
            return false;
        }

        if (str_starts_with($url, '/') && !str_starts_with($url, '//') && !str_starts_with($url, '/\\')) {
            return true;
        }

        $target = parse_url($url);
        $app = parse_url(url('/'));

        if (!is_array($target) || !is_array($app)) {
            return false;
        }

        return ($target['scheme'] ?? null) === ($app['scheme'] ?? null)
            && ($target['host'] ?? null) === ($app['host'] ?? null)
            && ($target['port'] ?? null) === ($app['port'] ?? null);
    }

    private function detailFromProduct(array $product): array
    {
        if (isset($product['title'])) {
            return $product;
        }

        $features = array_values(array_filter($product['features'] ?? []));
        $specifications = array_values(array_filter($product['specifications'] ?? []));

        if ($features === []) {
            $features = [
                $product['short_description'] ?: 'Commercial-grade product configuration',
                'Ready for digital signage deployments',
                $product['status'] === 'active' ? 'Available for enquiries' : 'Availability on request',
            ];
        }

        if ($specifications === []) {
            $specifications = array_values(array_filter([
                'Category: ' . ($product['category'] ?: 'General'),
                $product['sku'] ? 'SKU: ' . $product['sku'] : null,
                'Status: ' . ucfirst($product['status'] ?? 'active'),
            ]));
        }

        return [
            'slug' => $product['slug'] ?? null,
            'title' => $product['name'],
            'seo_title' => $product['name'] . ' | The Locads',
            'seo_description' => $product['short_description'] ?: $product['description'] ?: 'View product details, features, pricing, and specifications from The Locads.',
            'seo_keywords' => trim(($product['name'] ?? '') . ', ' . ($product['category'] ?? '') . ', The Locads product'),
            'description' => $product['description'] ?: ($product['short_description'] ?: 'Detailed product information is available from The Locads team.'),
            'image' => $product['image_path'] ? asset($product['image_path']) : asset('icons/14pageimg.jpg'),
            'price' => $this->formatPrice($product),
            'price_label' => ($product['type'] ?? 'product') === 'rent' ? 'Rent Price' : 'Purchase Price',
            'purchase_label' => ($product['type'] ?? 'product') === 'rent' ? 'Request Rental' : 'Purchase Now',
            'back_route' => $this->backRouteForProduct($product),
            'license_enabled' => $this->canGenerateLicenseForProduct($product),
            'features' => $features,
            'specifications' => $specifications,
            'badges' => [
                'Warranty Support',
                ($product['type'] ?? 'product') === 'rent' ? 'Rental Available' : 'Ready to Buy',
                ucfirst($product['status'] ?? 'active'),
            ],
        ];
    }

    private function formatPrice(array $product): string
    {
        if (($product['type'] ?? 'product') === 'rent' && !empty($product['rent_price'])) {
            return '₹' . number_format((float) $product['rent_price'], 0) . ' per ' . ($product['billing_period'] ?? 'month');
        }

        if (!empty($product['price'])) {
            return '₹' . number_format((float) $product['price'], 0);
        }

        if (!empty($product['rent_price'])) {
            return '₹' . number_format((float) $product['rent_price'], 0) . ' per ' . ($product['billing_period'] ?? 'month');
        }

        return 'On request';
    }

    private function backRouteForProduct(array $product): string
    {
        $category = strtolower((string) ($product['category'] ?? ''));

        if (str_contains($category, 'software') || str_contains($category, 'licen') || str_contains($category, 'licen')) {
            return route('products.index-g');
        }

        if (str_contains($category, 'indoor')) {
            return route('products.index-d');
        }

        if (str_contains($category, 'outdoor') || str_contains($category, 'window')) {
            return route('products.index-e');
        }

        if (str_contains($category, 'media')) {
            return route('products.index-f');
        }

        return route('products.index-c');
    }

    private function canGenerateLicenseForProduct(array $product): bool
    {
        $category = strtolower((string) ($product['category'] ?? ''));

        return str_contains($category, 'software')
            || str_contains($category, 'license')
            || str_contains($category, 'licence');
    }

    private function seededProductDetail(string $slug): ?array
    {
        $seededProducts = [
            'pro-series-4k-displays' => [
                'slug' => 'pro-series-4k-displays',
                'title' => 'Pro Series 4K Display',
                'seo_title' => 'Pro Series 4K Display | The Locads',
                'seo_description' => 'View Pro Series 4K Display details, features, pricing, and specifications.',
                'seo_keywords' => 'Pro Series 4K Display, indoor digital signage, The Locads',
                'description' => 'Commercial-grade indoor 4K display for retail, corporate, and customer-facing signage environments.',
                'image' => asset('icons/commercial1.jpg'),
                'price' => '₹899',
                'purchase_label' => 'Purchase Now',
                'back_route' => route('products.index-d'),
                'features' => [
                    '4K UHD commercial panel',
                    'Slim bezel design',
                    'High reliability for daily signage',
                    'Portrait and landscape installation',
                    'CMS-ready playback support',
                    'Ideal for retail and lobby areas',
                ],
                'specifications' => [
                    'Display Type: Indoor commercial display',
                    'Resolution: 4K UHD',
                    'Brightness: 500 nits',
                    'Orientation: Portrait and landscape',
                    'Support: Setup support available',
                ],
                'badges' => ['3 Year Warranty', 'Installation Support', 'In Stock'],
            ],
            'pro-series-4k-display-43-rent' => [
                'slug' => 'pro-series-4k-display-43-rent',
                'title' => 'Pro Series 4K Display - 43" Rent',
                'seo_title' => 'Pro Series 4K Display Rental | The Locads',
                'seo_description' => 'View rental details for Pro Series 4K Display from The Locads.',
                'seo_keywords' => '4K display rental, indoor signage rental, The Locads',
                'description' => 'Rental-ready 43 inch 4K display package for events, campaigns, retail activations, and temporary signage needs.',
                'image' => asset('icons/commercial2.jpg'),
                'price' => 'On request',
                'purchase_label' => 'Request Rental',
                'back_route' => route('products.index-d'),
                'features' => [
                    '43 inch 4K UHD display',
                    'Short-term rental friendly',
                    'Delivery and setup support',
                    'Great for events and launches',
                    'Commercial playback compatibility',
                ],
                'specifications' => [
                    'Rental Type: Indoor display rental',
                    'Size: 43 inch',
                    'Resolution: 4K UHD',
                    'Use Case: Events, campaigns, temporary signage',
                    'Support: Installation support available',
                ],
                'badges' => ['Rental Available', 'Setup Support', 'In Stock'],
            ],
            'high-bright-window-displays' => [
                'slug' => 'high-bright-window-displays',
                'title' => 'High-Bright Window Display - 55"',
                'seo_title' => 'High-Bright Window Display | The Locads',
                'seo_description' => 'View High-Bright Window Display details for storefront and outdoor-facing signage.',
                'seo_keywords' => 'high bright window display, outdoor signage, The Locads',
                'description' => 'High-brightness display designed for storefront windows and daylight-facing signage with strong visibility.',
                'image' => asset('icons/outdoorimage.jpg'),
                'price' => '₹1,499',
                'purchase_label' => 'Purchase Now',
                'back_route' => route('products.index-e'),
                'features' => [
                    'High-brightness window visibility',
                    '55 inch commercial display',
                    'Anti-glare presentation',
                    'Built for storefront promotions',
                    'CMS-ready content playback',
                ],
                'specifications' => [
                    'Display Type: High-bright window display',
                    'Size: 55 inch',
                    'Brightness: Daylight visible',
                    'Orientation: Portrait and landscape',
                ],
                'badges' => ['3 Year Warranty', 'Storefront Ready', 'In Stock'],
            ],
            'high-bright-window-display-55-rent' => [
                'slug' => 'high-bright-window-display-55-rent',
                'title' => 'High-Bright Window Display - 55" Rent',
                'seo_title' => 'High-Bright Window Display Rental | The Locads',
                'seo_description' => 'View rental details for High-Bright Window Display from The Locads.',
                'seo_keywords' => 'window display rental, high bright display rental, The Locads',
                'description' => 'Rental-ready high-bright 55 inch window display for storefront campaigns, outdoor-facing promotions, and events.',
                'image' => asset('icons/outdoorimage.jpg'),
                'price' => 'On request',
                'purchase_label' => 'Request Rental',
                'back_route' => route('products.index-e'),
                'features' => [
                    '55 inch high-bright rental display',
                    'Great for storefront campaigns',
                    'Temporary promotion friendly',
                    'Delivery and installation support',
                    'Visible in bright environments',
                ],
                'specifications' => [
                    'Rental Type: Window display rental',
                    'Size: 55 inch',
                    'Brightness: High-bright display',
                    'Use Case: Campaigns, events, temporary storefront signage',
                    'Support: Installation support available',
                ],
                'badges' => ['Rental Available', 'Campaign Ready', 'In Stock'],
            ],
            'edge-media-players' => [
                'slug' => 'edge-media-players',
                'title' => 'Edge Media Player - i5',
                'seo_title' => 'Edge Media Player i5 | The Locads',
                'seo_description' => 'View Edge Media Player i5 details, features, pricing, and specifications.',
                'seo_keywords' => 'edge media player, signage player i5, The Locads',
                'description' => 'Compact i5-powered media player for reliable digital signage playback across single-screen and multi-screen deployments.',
                'image' => asset('icons/mediaimage.jpg'),
                'price' => '₹699',
                'purchase_label' => 'Purchase Now',
                'back_route' => route('products.index-f'),
                'features' => [
                    'Intel i5 performance',
                    'Reliable signage playback',
                    'Compact edge device',
                    'Cloud CMS compatible',
                    'Supports scheduled media playback',
                ],
                'specifications' => [
                    'Processor: Intel i5 class',
                    'Device Type: Edge media player',
                    'Use Case: Digital signage playback',
                    'Connectivity: Network-ready deployment',
                ],
                'badges' => ['Compact Device', 'CMS Ready', 'In Stock'],
            ],
            'edge-media-player-i5-rent' => [
                'slug' => 'edge-media-player-i5-rent',
                'title' => 'Edge Media Player - i5 Rent',
                'seo_title' => 'Edge Media Player i5 Rental | The Locads',
                'seo_description' => 'View rental details for Edge Media Player i5 from The Locads.',
                'seo_keywords' => 'media player rental, signage player rental, The Locads',
                'description' => 'Rental-ready edge media player for temporary screen deployments, events, and short-term signage projects.',
                'image' => asset('icons/mediaimage.jpg'),
                'price' => 'On request',
                'purchase_label' => 'Request Rental',
                'back_route' => route('products.index-f'),
                'features' => [
                    'i5 media player rental',
                    'Temporary signage deployment',
                    'Configured for playback needs',
                    'Works with CMS-led campaigns',
                    'Setup support available',
                ],
                'specifications' => [
                    'Rental Type: Media player rental',
                    'Processor: Intel i5 class',
                    'Use Case: Events and temporary signage',
                    'Deployment: Screen playback support',
                    'Support: Setup support available',
                ],
                'badges' => ['Rental Available', 'Configured Setup', 'In Stock'],
            ],
            'cloud-cms-license-annual-rent' => [
                'slug' => 'cloud-cms-license-annual-rent',
                'license_enabled' => true,
                'title' => 'Cloud CMS License (Annual)',
                'seo_title' => 'Cloud CMS License | The Locads',
                'seo_description' => 'View The Locads Cloud CMS License features, technical specifications, pricing, and software capabilities.',
                'seo_keywords' => 'cloud CMS license, signage software license, The Locads CMS',
                'description' => 'Full-featured cloud-based content management system for digital signage. Manage unlimited content, schedule playlists, monitor screen health, and access real-time analytics from anywhere.',
                'image' => asset('icons/14pageimg.jpg'),
                'price' => '₹299/year',
                'purchase_label' => 'Purchase Now',
                'back_route' => route('products.index-g'),
                'features' => [
                    'Unlimited content uploads',
                    'Real-time remote updates',
                    'Advanced scheduling (day-parting)',
                    'Multi-user access control',
                    'Unicast, Multicast, Broadcast modes',
                    'Analytics and reporting dashboard',
                    'Mobile app for iOS/Android',
                    '24/7 screen health monitoring',
                    'Template library included',
                    'API for custom integrations',
                ],
                'specifications' => [
                    'License Type: Annual subscription',
                    'Users: Up to 10 users',
                    'Content Storage: 100GB cloud storage',
                    'Screens: Per screen pricing',
                    'Updates: Real-time content updates',
                    'Scheduling: Advanced scheduling engine',
                    'Analytics: Real-time performance metrics',
                    'Support: Email support included',
                    'API Access: RESTful API included',
                    'Uptime SLA: 99.9% guaranteed',
                ],
                'badges' => ['3 Year Warranty', 'Free Shipping', 'In Stock'],
            ],
            'pen-drive-software-licence' => [
                'slug' => 'pen-drive-software-licence',
                'license_enabled' => true,
                'title' => 'Pen Drive Software Licence',
                'seo_title' => 'Pen Drive Software License | The Locads',
                'seo_description' => 'View The Locads Pen Drive Software License details for offline digital signage playback and secure environments.',
                'seo_keywords' => 'pen drive software license, offline signage software, The Locads',
                'description' => 'Offline signage playback software for secure locations where cloud access is limited. Load content with USB, run scheduled media, and keep screens operational without internet dependency.',
                'image' => asset('icons/softwareimage.jpg'),
                'price' => '₹899',
                'purchase_label' => 'Purchase Now',
                'back_route' => route('products.index-g'),
                'features' => [
                    'Offline USB content playback',
                    'Secure local media deployment',
                    'Simple playlist management',
                    'No always-on internet required',
                    'Works for locked-down environments',
                    'Easy screen-level installation',
                ],
                'specifications' => [
                    'License Type: One-time offline license',
                    'Deployment: USB based setup',
                    'Connectivity: Offline playback supported',
                    'Content Updates: Manual USB update',
                    'Support: Setup support included',
                ],
                'badges' => ['Offline Ready', 'USB Setup', 'In Stock'],
            ],
        ];

        return $seededProducts[$slug] ?? null;
    }
}
