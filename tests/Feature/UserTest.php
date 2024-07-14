<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;
use App\Models\User;

class UserTest extends TestCase
{
    /**
     * @test
     */
    public function can_create_a_user(): void
    {
        $user = User::factory()->make([
            'firstname' => 'test',
            'lastname' => 'user',
            'email' => 'testuser@email.com',
            'password' => Hash::make('userpassword')
        ]);

        $this->assertTrue($user->firstname == 'test');
        $this->assertTrue($user->lastname == 'user');
        $this->assertTrue($user->email == 'testuser@email.com');
        $this->assertTrue(Hash::check('userpassword', $user->password));
    }
}

