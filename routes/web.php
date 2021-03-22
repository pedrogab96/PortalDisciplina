<?php

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


Route::get('/', [DisciplineController::class,'index'] )->name('index');
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::post('/search', [DisciplineController::class,'search'])->name('search');
//TODO adicionar dentro do grupo do middleware para apenas funcionar quando estiver logado
Route::get('/disciplina/novo', [DisciplineController::class, 'create'])->name('createDisciplina');
Route::get('/disciplina/editar', [DisciplineController::class, 'edit'])->name('editDisciplina');
Route::post('/disciplina', [DisciplineController::class, 'store'])->name('storeDisciplina');
Route::post('/disciplinaupdate', [DisciplineController::class, 'update'])->name('updateDisciplina');

//--Desativada por enquanto
// route::get('/minhasdisciplinas', [DisciplineController::class, 'mydisciplines'])->name('mydisciplines');

Route::get('sobre', function () { return view ('information'); })->name('information');
Route::get('colaborar', function () { return view ('collaborate'); })->name('collaborate');

Route::get('/disciplina/{id}', [DisciplineController::class, 'show'])->name('showDiscipline');
Route::delete('/remove/{id}',[DisciplineController::class,'destroy'])->name('deleteDiscipline');



Route::middleware(['auth'])->group(function () {
    Route::get('/perfil',[UsersController::class, 'index'])->name('profile');
    Route::post('/perfil',[UsersController::class, 'update'])->name('updateUser');
});
