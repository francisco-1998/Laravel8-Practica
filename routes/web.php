<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CursoController;
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

//Sistemas de rutas actual
// Route::get('/',  [CursoController::class, 'index'])->name('curso.index');
// Route::get('curso/create', [CursoController::class, 'create'])->name('curso.create');
// Route::post('curso/store', [CursoController::class, 'store'])->name('curso.store');
// Route::get('curso/show/{curso}', [CursoController::class, 'show'])->name('curso.show');
// Route::get('curso/{curso}/edit', [CursoController::class, 'edit'])->name('curso.edit');
// Route::put('curso/{curso}/update', [CursoController::class, 'update'])->name('curso.update');
// Route::delete('users/{curso}/delete', [CursoController::class, 'destroy'])->name('curso.delete');


Route::get('/', [CursoController::class, 'index']);
Route::resource('asignaturas', CursoController::class)->names('curso')->parameters(['asignaturas'=>'curso']);





//Sistemas de rutas antiguo
// Route::get('/', 'HomeController');
// Route::get('curso', 'CursoController@create');

