<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Chart\PassRateController;

use App\Models\Discipline;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Auth::routes([
    'register' => false,
    'reset' => false, // Password Reset Routes...
    'verify' => false, // Email Verification Routes...
]);

Route::middleware(['auth'])->group(function () {
    Route::get('/perfil', [UsersController::class, 'index'])->name('profile');
    Route::post('/perfil', [UsersController::class, 'update'])->name('updateUser');

    Route::resource('disciplinas', DisciplineController::class)
        ->except(['index', 'show',]);

    Route::resource('professores', ProfessorUserController::class)
        ->except(['show','update']);

    Route::resource('disciplinas.faqs', FaqController::class)
        ->except(['index']);
});

Route::get('/disciplinas/{id}', [DisciplineController::class, 'show'])
    ->name('disciplinas.show');

Route::group([
    'prefix' => 'charts',
    'as' => 'charts.',
], function () {
    Route::group([
        'prefix' => 'pass_rate',
        'as' => 'pass_rate.',
    ], function () {
        Route::get('/', [PassRateController::class, 'index'])
            ->name('index');
        Route::get('select/professors', [PassRateController::class, 'selectProfessors'])
            ->name('professors');
        Route::get('select/disciplines', [PassRateController::class, 'selectDisciplines'])
            ->name('disciplines');
        Route::get('tables', [PassRateController::class, 'getTableData'])
            ->name('tables');
    });
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
