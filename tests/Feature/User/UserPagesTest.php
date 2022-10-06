<?php

namespace Tests\Feature\User;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserPagesTest extends TestCase
{
    protected $seed = true;
    use RefreshDatabase;

    public function test_users_dashboard_page_is_working()
    {
        $user = User::factory()->create(['role_id' => 2]);

        $response = $this->actingAs($user)->get('/user/dashboard');

        $response->assertStatus(200);
    }

    public function test_users_make_order_page_is_working()
    {
        $user = User::factory()->create(['role_id' => 2]);

        $response = $this->actingAs($user)->get('/user/make-order');

        $response->assertStatus(200);
    }

    public function test_users_orders_page_is_working()
    {
        $user = User::factory()->create(['role_id' => 2]);

        $response = $this->actingAs($user)->get('/user/orders');

        $response->assertStatus(200);
    }

    public function test_users_settings_page_is_working()
    {
        $user = User::factory()->create(['role_id' => 2]);

        $response = $this->actingAs($user)->get('/user/settings');

        $response->assertStatus(200);
    }

}
