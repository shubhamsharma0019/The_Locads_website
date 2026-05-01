<?php

namespace Tests\Feature;

use App\Models\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class RouteSmokeTest extends TestCase
{
    use RefreshDatabase;

    public function test_public_pages_are_available(): void
    {
        $routes = [
            '/',
            '/about',
            '/services',
            '/industries',
            '/signage',
            '/contact',
            '/contact-alt',
            '/faq',
            '/products',
            '/products/style-b',
            '/products/style-c',
            '/products/style-d',
            '/products/style-e',
            '/products/style-f',
            '/products/style-g',
            '/products/detail',
            '/products/detail-b',
            '/blog',
            '/blog/post',
        ];

        foreach ($routes as $route) {
            $this->get($route)->assertOk();
        }
    }

    public function test_protected_pages_redirect_guests_to_login(): void
    {
        $routes = [
            '/dashboard',
            '/dashboard/enquiries',
            '/products/create',
            '/products/rentals',
        ];

        foreach ($routes as $route) {
            $this->get($route)->assertRedirect('/login');
        }
    }

    public function test_created_product_detail_page_uses_product_data(): void
    {
        $product = Product::query()->create([
            'type' => 'product',
            'name' => 'Lobby Display Pro',
            'slug' => 'lobby-display-pro',
            'sku' => 'LDP-01',
            'category' => 'Indoor Display',
            'status' => 'active',
            'price' => 45999,
            'rent_price' => null,
            'billing_period' => 'month',
            'best_for' => 'Reception areas',
            'short_description' => 'A sharp display for reception and lobby signage.',
            'description' => 'A sharp display for reception and lobby signage with commercial-grade reliability.',
            'features' => ['4K panel', 'Slim bezel'],
            'specifications' => ['Resolution: 4K UHD', 'Brightness: 500 nits'],
            'image_path' => null,
        ]);

        $this->get(route('products.detail', $product->slug))
            ->assertOk()
            ->assertSee('Lobby Display Pro')
            ->assertSee('4K panel')
            ->assertSee('Resolution')
            ->assertSee('4K UHD');
    }
}
