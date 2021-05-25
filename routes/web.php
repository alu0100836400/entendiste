<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AsignaturasController;
use App\Http\Controllers\AsignaturaController;
use App\Http\Controllers\PreguntasController;
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

Route::get('/', HomeController::class)->name('inicio'); //esto llama al método invoke de HomeController
//Route::get('cursos', [CursosController::class, 'index']); //así si tienes más de una funcion en el controller
Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('validation', [LoginController::class, 'validateLogin'])->name('validation'); //paso intermedio para que se establezca la cookie correctamente
Route::get('asignaturas', [AsignaturasController::class, 'index'])->name('asignaturas');
Route::get('asignaturas/{id}', [AsignaturaController::class, 'index'])->name('asignatura');
Route::get('asignaturas/{asignatura}/{pregunta}', PreguntasController::class)->name('pregunta');