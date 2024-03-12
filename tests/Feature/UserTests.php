<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserTests extends TestCase
{

    use DatabaseTransactions;

    public function test_register()
    {
        $user = User::factory()->create();

        $token = $user->createToken('TestToken')->accessToken;

        $data = [
            'name' => 'TestUser',
            'email' => 'testuser@example.com',
            'password' => 'TestPassword123!',
        ];

        $response = $this->withToken($token)->post('/api/players', $data);

        $response->assertStatus(201)
            ->assertJson([
                'name' => 'TestUser',
                'email' => 'testuser@example.com',
            ]);

        $this->assertDatabaseHas('users', ['name' => 'TestUser', 'email' => 'testuser@example.com']);
    }
}
