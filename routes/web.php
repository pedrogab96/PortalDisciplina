<?php

use App\Http\Controllers\FaqController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DisciplineController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsersController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Routes auth
Auth::routes([
    'register' => false,
    'reset' => false, // Password Reset Routes...
    'verify' => false, // Email Verification Routes...
]);

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/', [DisciplineController::class, 'index'])
    ->name('index');
Route::post('/search', [DisciplineController::class, 'search'])->name('search');

//--Desativada por enquanto
// route::get('/minhasdisciplinas', [DisciplineController::class, 'mydisciplines'])->name('mydisciplines');

Route::get('sobre', function () {
    return view('information');
})->name('information');
Route::get('colaborar', function () {
    return view('collaborate');
})->name('collaborate');

Route::middleware(['auth'])->group(function () {
    Route::get('/perfil', [UsersController::class, 'index'])->name('profile');
    Route::post('/perfil', [UsersController::class, 'update'])->name('updateUser');

    Route::resource('disciplinas', DisciplineController::class)
        ->except(['index', 'show',]);

    Route::resource('disciplinas.faqs', FaqController::class)
        ->except(['index']);
});

Route::get('/disciplinas/{id}', [DisciplineController::class, 'show'])
    ->name('disciplinas.show');

