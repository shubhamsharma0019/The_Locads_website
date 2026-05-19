<?php

namespace Tests\Feature;

use App\Models\Product;
use App\Models\License;
use App\Models\User;
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
            '/book-demo',
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
            $this->get($route)->assertRedirect('/admin');
        }
    }

    public function test_home_alias_redirects_to_default_home_page(): void
    {
        $this->get('/home')->assertRedirect('/');
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

    public function test_created_products_show_without_dashboard_helper_heading(): void
    {
        Product::query()->create([
            'type' => 'product',
            'name' => 'Reception Display',
            'slug' => 'reception-display',
            'sku' => 'REC-01',
            'category' => 'Indoor Display',
            'status' => 'active',
            'price' => 40000,
            'rent_price' => 5000,
            'billing_period' => 'quarter',
            'best_for' => 'Reception areas',
            'short_description' => 'Display for reception signage.',
            'description' => 'Display for reception signage.',
            'features' => ['4K panel'],
            'specifications' => ['Resolution: 4K UHD'],
            'image_path' => null,
        ]);

        $this->get('/products/style-c')
            ->assertOk()
            ->assertSee('Reception Display')
            ->assertDontSee('Latest Added Products')
            ->assertDontSee('Jo bhi products aap dashboard se create karenge');
    }

    public function test_dashboard_product_cards_link_to_public_product_detail(): void
    {
        $this->actingAs(User::factory()->create());

        $product = Product::query()->create([
            'type' => 'product',
            'name' => 'Software Player Pro',
            'slug' => 'software-player-pro',
            'sku' => 'SPP-01',
            'category' => 'Software',
            'status' => 'active',
            'price' => 899,
            'rent_price' => null,
            'billing_period' => 'month',
            'best_for' => 'Retail',
            'short_description' => 'Software player for signage.',
            'description' => 'Software player for signage.',
            'features' => ['Offline playback'],
            'specifications' => ['License Type: One-time'],
            'image_path' => null,
        ]);

        $this->get(route('products.create'))
            ->assertOk()
            ->assertSee(route('products.detail', [
                'productSlug' => $product['slug'],
                'return_to' => route('products.create'),
            ]), false)
            ->assertSee('data-url="' . route('products.detail', [
                'productSlug' => $product['slug'],
                'return_to' => route('products.create'),
            ]) . '"', false)
            ->assertSee('data-category="software"', false);
    }

    public function test_product_create_stores_sentence_case_text(): void
    {
        $this->actingAs(User::factory()->create());

        $this->post(route('products.store'), [
            'type' => 'product',
            'name' => 'lOBBY DISPLAY',
            'sku' => 'LDP-01',
            'category' => 'INDOOR DISPLAY',
            'status' => 'active',
            'price' => 45999,
            'rent_price' => null,
            'billing_period' => 'month',
            'best_for' => 'RECEPTION AREAS',
            'short_description' => 'sHARP DISPLAY FOR LOBBY. SECOND LINE READY',
            'description' => 'COMMERCIAL DISPLAY FOR RECEPTION. EASY TO MANAGE',
            'features' => "4K PANEL\nSLIM BEZEL",
            'specifications' => "RESOLUTION: 4K UHD\nBRIGHTNESS: 500 NITS",
        ])->assertRedirect();

        $product = Product::query()->firstOrFail();

        $this->assertSame('Lobby display', $product->name);
        $this->assertSame('LDP-01', $product->sku);
        $this->assertSame('Indoor display', $product->category);
        $this->assertSame('Reception areas', $product->best_for);
        $this->assertSame('Sharp display for lobby. Second line ready', $product->short_description);
        $this->assertSame(['4K panel', 'Slim bezel'], $product->features);
        $this->assertSame(['Resolution: 4k uhd', 'Brightness: 500 nits'], $product->specifications);
    }

    public function test_license_generation_and_activation_verification(): void
    {
        $this->from('/products/detail')->post(route('licence.store'), [
            'mac_number' => ' aa-bb-cc-11-22-33 ',
            'product_slug' => 'cloud-cms-license-annual-rent',
            'product_name' => 'Cloud CMS License',
        ])->assertRedirect('/products/detail')
            ->assertSessionHas('activation_key')
            ->assertSessionHas('activation_mac', 'AA-BB-CC-11-22-33');

        $license = License::query()->firstOrFail();

        $this->assertSame('AA-BB-CC-11-22-33', $license->mac_number);
        $this->assertSame('cloud-cms-license-annual-rent', $license->product_slug);

        $this->postJson(route('licence.store'), [
            'mac_number' => ' 11-22-33-aa-bb-cc ',
            'product_slug' => 'pen-drive-software-licence',
            'product_name' => 'Pen Drive Software Licence',
        ])->assertOk()
            ->assertJson([
                'activation_mac' => '11-22-33-AA-BB-CC',
                'message' => 'Activation key generated.',
            ])
            ->assertJsonStructure([
                'activation_key',
                'activation_mac',
                'message',
            ]);

        $this->withSession([
            'activation_key' => $license->activation_key,
            'activation_mac' => $license->mac_number,
        ])->get(route('products.detail', 'cloud-cms-license-annual-rent'))
            ->assertOk()
            ->assertSee('Activation Key Generated')
            ->assertDontSee('Price')
            ->assertDontSee('MAC Number')
            ->assertDontSee('Purchase Now')
            ->assertDontSee('Request Quote')
            ->assertDontSee('>Activate Key</span>', false);

        $this->postJson('/api/activate', [
            'mac_number' => 'aa-bb-cc-11-22-33',
            'activation_key' => $license->activation_key,
        ])->assertOk()
            ->assertJson([
                'authenticated' => true,
            ]);

        $this->postJson('/api/activate', [
            'mac_number' => 'aa-bb-cc-11-22-33',
            'activation_key' => 'WRONG-KEY',
        ])->assertStatus(422)
            ->assertJson([
                'authenticated' => false,
            ]);
    }

    public function test_license_generation_is_only_available_for_software_and_licence_products(): void
    {
        $this->get(route('products.detail', 'pro-series-4k-displays'))
            ->assertOk()
            ->assertDontSee('MAC Number')
            ->assertDontSee('Activate Key')
            ->assertSee('Purchase Now')
            ->assertSee('Request Quote');

        $this->from(route('products.detail', 'pro-series-4k-displays'))->post(route('licence.store'), [
            'mac_number' => 'aa-bb-cc-11-22-33',
            'product_slug' => 'pro-series-4k-displays',
            'product_name' => 'Pro Series 4K Display',
        ])->assertRedirect(route('products.detail', 'pro-series-4k-displays'))
            ->assertSessionHasErrors('product_slug');

        $this->assertDatabaseCount('licence', 0);
    }

    public function test_product_detail_back_link_returns_to_source_listing(): void
    {
        $this->get(route('products.detail', [
            'productSlug' => 'cloud-cms-license-annual-rent',
            'return_to' => '/products/style-c',
        ]))
            ->assertOk()
            ->assertSee('href="/products/style-c"', false);
    }

    public function test_product_detail_back_link_rejects_external_return_urls(): void
    {
        $this->get(route('products.detail', [
            'productSlug' => 'cloud-cms-license-annual-rent',
            'return_to' => 'https://example.com/bad',
        ]))
            ->assertOk()
            ->assertDontSee('https://example.com/bad', false)
            ->assertSee('href="' . route('products.index-g') . '"', false);
    }

    public function test_product_detail_back_link_rejects_protocol_relative_return_urls(): void
    {
        $this->get(route('products.detail', [
            'productSlug' => 'cloud-cms-license-annual-rent',
            'return_to' => '//example.com/bad',
        ]))
            ->assertOk()
            ->assertDontSee('href="//example.com/bad"', false)
            ->assertSee('href="' . route('products.index-g') . '"', false);
    }

    public function test_product_detail_back_link_rejects_same_prefix_external_return_urls(): void
    {
        $this->get(route('products.detail', [
            'productSlug' => 'cloud-cms-license-annual-rent',
            'return_to' => url('/') . '.example.com/bad',
        ]))
            ->assertOk()
            ->assertDontSee(url('/') . '.example.com/bad', false)
            ->assertSee('href="' . route('products.index-g') . '"', false);
    }
}
