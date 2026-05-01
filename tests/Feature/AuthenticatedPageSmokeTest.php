<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AuthenticatedPageSmokeTest extends TestCase
{
    use RefreshDatabase;

    public function test_dashboard_pages_render_for_authenticated_users(): void
    {
        $this->actingAs(User::factory()->create());

        $routes = [
            '/dashboard',
            '/dashboard/enquiries',
            '/dashboard/enquiries?type=rent',
            '/products/create',
            '/products/rentals',
        ];

        foreach ($routes as $route) {
            $this->get($route)->assertOk();
        }
    }
}
