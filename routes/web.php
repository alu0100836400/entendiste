<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AsignaturasController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', HomeController::class); //esto llama al método invoke de HomeController
//Route::get('cursos', [CursosController::class, 'index']); //así si tienes más de una funcion en el controller
Route::get('login', LoginController::class);
Route::get('inicio', HomeController::class);
Route::get('asignaturas', AsignaturasController::class);