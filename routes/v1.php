<?php

namespace App\Http\Controllers;

use App\Http\Controllers\V1\AuthController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group([
    'middleware' => 'guest:api',
], function () {
    Route::post('login', [AuthController::class, 'login']);
});

Route::group([
    'middleware' => 'auth:sanctum',
], function () {
    Route::get('logout', [AuthController::class, 'logout']);

    /*
     * User
     */
    Route::apiResource('users', 'UserController');
});
