<?php

namespace Tests\Feature;

use App\Enums\RoleName;
use App\Http\Resources\V1\UserResource;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\Response;
use Tests\TestCase;

class AuthFlowTest extends TestCase
{
    use RefreshDatabase;

    private $userData = [
        'name' => 'Sr Test',
        'email' => 'professor@gmail.com',
        'password' => 'test@123',
    ];

    /**
     * auth.login
     *
     * @return void
     */
    public function test_login()
    {
        $user = User::factory()
            ->withRole(RoleName::PROFESSOR)
            ->create([
                'name' => $this->userData['name'],
                'email' => $this->userData['email'],
                'password' => bcrypt($this->userData['password']),
            ]);
        $resource = new UserResource($user);

        $response = $this->postJson($this->path . 'login', [
            'email' => $this->userData['email'],
            'password' => $this->userData['password'],
        ]);

        $response->assertSuccessful()
            ->assertExactJson([
                'data' => [
                    'token' => $response->getData(true)['data']['token'],
                    'user' => $resource->response($response)->getData(true)['data'],
                ],
            ]);
        $this->assertAuthenticatedAs($user);
    }

    /**
     * auth.logout
     *
     * @return void
     */
    public function test_logout()
    {
        $user = User::factory()
            ->withRole(RoleName::PROFESSOR)
            ->create([
                'email' => $this->userData['email'],
                'password' => bcrypt($this->userData['password']),
            ]);
        $token = $user->createToken(config('auth.token') . $user->email)->plainTextToken;

        $response = $this->getJson($this->path . 'logout', [
            'Authorization' => 'Bearer ' . $token,
        ]);

        $response->assertSuccessful()
            ->assertJson([
                'message' => 'Volte sempre!',
            ]);
    }

    /**
     * auth.logout (without session)
     *
     * @return void
     */
    public function test_logout_without_session()
    {
        $response = $this->getJson($this->path . 'logout', [
            'Authorization' => 'Bearer 1234567890',
        ]);

        $response->assertStatus(Response::HTTP_UNAUTHORIZED);
    }
}
