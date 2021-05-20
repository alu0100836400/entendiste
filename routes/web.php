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

Route::post('/', HomeController::class)->name('inicioPost'); //esto llama al método invoke de HomeController
//Route::get('cursos', [CursosController::class, 'index']); //así si tienes más de una funcion en el controller
Route::get('/', HomeController::class)->name('inicio');
Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('/', [LoginController::class, 'validateLogin'])->name('validation');
Route::get('asignaturas', [AsignaturasController::class, 'index'])->name('asignaturas');
Route::get('asignaturas/{asignatura}', [AsignaturasController::class, 'show'])->name('asignatura');