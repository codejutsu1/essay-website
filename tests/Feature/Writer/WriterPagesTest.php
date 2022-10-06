<?php

namespace Tests\Feature\Writer;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class WriterPagesTest extends TestCase
{
    protected $seed = true;
    use RefreshDatabase;

    public function test_writers_dashboard_page_is_working()
    {
        $user = User::factory()->create(['role_id' => 3]);

        $response = $this->actingAs($user)->get('/writer/dashboard');

        $response->assertStatus(200);
    }

    public function test_writers_orders_page_is_working()
    {
        $user = User::factory()->create(['role_id' => 3]);

        $response = $this->actingAs($user)->get('/writer/orders');

        $response->assertStatus(200);
    }

    public function test_writers_received_orders_page_is_working()
    {
        $user = User::factory()->create(['role_id' => 3]);

        $response = $this->actingAs($user)->get('/writer/received-orders');

        $response->assertStatus(200);
    }

    public function test_writers_settings_page_is_working()
    {
        $user = User::factory()->create(['role_id' => 3]);

        $response = $this->actingAs($user)->get('/writer/settings');

        $response->assertStatus(200);
    }
}
