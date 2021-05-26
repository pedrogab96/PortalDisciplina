<?php

namespace App\Http\Controllers\V1;

use App\Http\Requests\V1\Auth\LoginRequest;
use App\Http\Requests\V1\Auth\LogoutRequest;
use App\Http\Resources\V1\UserResource;
use App\Models\User;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

/**
 * Class AuthController
 * @package App\Http\Controllers\Api\V1
 *
 * @group V1 Auth
 */
class AuthController extends Controller
{
    /**
     * Login
     *
     * @param LoginRequest $request
     * @return \Illuminate\Http\JsonResponse
     * @unauthenticated
     * @responseFile storage/responses/auth.login.json
     * @responseFile 401 storage/responses/auth.login_401.json
     */
    public function login(LoginRequest $request)
    {
        // Dados para login
        $loginData = [
            'email' => $request->get('email'),
            'password' => $request->get('password'),
        ];

        // Verifica se o usuário realmente existe
        if (Auth::attempt($loginData)) {
            /**
             * @var $user User
             */
            $user = Auth::user();

            return $this->responseData([
                'token' => $user->createToken(config('auth.token') . $user->email)->plainTextToken,
                'user' => new UserResource($user),
            ]);
        }

        return $this->responseError([
            'message' => 'Credenciais incorretas!',
            'errors' => [
                'general' => 'Não autorizado.',
            ],
        ], Response::HTTP_UNAUTHORIZED);
    }

    /**
     * Logout
     *
     * @param LogoutRequest $request
     * @return \Illuminate\Http\JsonResponse
     * @responseFile storage/responses/auth.logout.json
     */
    public function logout(LogoutRequest $request)
    {
        $request->user()
            ->currentAccessToken()
            ->delete();

        return $this->responseSuccess([
            'message' => 'Volte sempre!',
        ]);
    }
}
