<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * @test
     */
    public function test_the_application_returns_a_successful_response(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    /**
     * @test
     */
    public function a_user_can_visit(): void
    {
        $user = User::factory()->create();
        $response = $this->actingAs($user)->get('/');

        $response->assertStatus(200);
    }
}
