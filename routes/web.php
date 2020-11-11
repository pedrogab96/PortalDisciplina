<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DisciplineController;

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

Route::get('/', function () {
    return view('disciplines-search');
})->name('index');

Route::post('/search', [DisciplineController::class,'search'])->name('search');

Route::get('/disciplina/novo', [DisciplineController::class, 'create'])->name('createDisciplina');
Route::post('/disciplina', [DisciplineController::class, 'store'])->name('storeDisciplina');

/* TESTE */
// Route::get('/disciplina/novo', function () {
//     return view('discipline-new');
// });

