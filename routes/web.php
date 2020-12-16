<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DisciplineController;
use App\Http\Controllers\HomeController;

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


Route::get('/', [DisciplineController::class,'index'] )->name('index');
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::post('/search', [DisciplineController::class,'search'])->name('search');
Route::get('/disciplina/novo', [DisciplineController::class, 'create'])->name('createDisciplina');
Route::post('/disciplina', [DisciplineController::class, 'store'])->name('storeDisciplina');
route::get('/minhasdisciplinas', [DisciplineController::class, 'mydisciplines'])->name('mydisciplines');
Route::get('/disciplina/{id}', [DisciplineController::class, 'show'])->name('showDiscipline');
Route::delete('/remove/{id}',[DisciplineController::class,'destroy'])->name('deleteDiscipline');