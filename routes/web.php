<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;

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
Route::get('/', HomeController::class);
Route::get('curso', [CursoController::class, 'index']);
Route::get('curso/create', [CursoController::class, 'create']);
Route::get('curso/show/{id}', [CursoController::class, 'show']);


//Sistemas de rutas antiguo
// Route::get('/', 'HomeController');
// Route::get('curso', 'CursoController@create');

