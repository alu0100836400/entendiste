<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AsignaturasController;
use App\Http\Controllers\AsignaturaController;
use App\Http\Controllers\PreguntasController;
use Illuminate\Auth\Events\Login;
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

Route::get('/', HomeController::class)->name('inicio');
Route::get('cuenta', UserController::class)->name('cuenta');
Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('validation', [LoginController::class, 'validateLogin'])->name('validation'); //paso intermedio para que se establezca la cookie correctamente
Route::post('register', [LoginController::class, 'registerTeacher'])->name('register');
Route::get('verify', [LoginController::class, 'verify'])->name('verify');
Route::get('asignaturas', [AsignaturasController::class, 'index'])->name('asignaturas');
Route::post('asignaturas', [AsignaturasController::class, 'create'])->name('nuevaAsignatura');
Route::get('asignaturas/{id}', [AsignaturaController::class, 'index'])->name('asignatura');
Route::post('asignaturas/{id}', [AsignaturaController::class, 'create'])->name('nuevaPregunta');
Route::get('asignaturas/{asignatura}/{pregunta}', PreguntasController::class)->name('pregunta');