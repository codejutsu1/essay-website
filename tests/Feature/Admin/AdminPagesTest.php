<?php

namespace Tests\Feature\Admin;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AdminPagesTest extends TestCase
{
    protected $seed = true;
    use RefreshDatabase;

    public function test_admin_dashboard_page_is_working()
    {
        $user = User::factory()->create(['role_id' => 1]);

        $response = $this->actingAs($user)->get('/admin/dashboard');

        $response->assertStatus(200);
    }

    public function test_admin_complete_orders_page_is_working()
    {
        $user = User::factory()->create(['role_id' => 1]);

        $response = $this->actingAs($user)->get('/admin/completed-orders');

        $response->assertStatus(200);
    }

    public function test_admin_all_orders_page_is_working()
    {
        $user = User::factory()->create(['role_id' => 1]);

        $response = $this->actingAs($user)->get('/admin/all-orders');

        $response->assertStatus(200);
    }

    public function test_admin_assign_orders_page_is_working()
    {
        $user = User::factory()->create(['role_id' => 1]);

        $response = $this->actingAs($user)->get('/admin/2/assign-orders');

        $response->assertStatus(200);
    }

    public function test_admin_users_index_page_is_working()
    {
        $user = User::factory()->create(['role_id' => 1]);

        $response = $this->actingAs($user)->get('/admin/users/index');

        $response->assertStatus(200);
    }

    public function test_admin_writers_index_page_is_working()
    {
        $user = User::factory()->create(['role_id' => 1]);

        $response = $this->actingAs($user)->get('/admin/writers/index');

        $response->assertStatus(200);
    }

    public function test_admin_users_show_page_is_working()
    {
        $user = User::factory()->create(['role_id' => 1]);

        $response = $this->actingAs($user)->get('/admin/users/show');

        $response->assertStatus(200);
    }

    public function test_admin_writers_show_page_is_working()
    {
        $user = User::factory()->create(['role_id' => 1]);

        $response = $this->actingAs($user)->get('/admin/writers/show');

        $response->assertStatus(200);
    }

    public function test_admin_seetings_page_is_working()
    {
        $user = User::factory()->create(['role_id' => 1]);

        $response = $this->actingAs($user)->get('/admin/settings');

        $response->assertStatus(200);
    }
}