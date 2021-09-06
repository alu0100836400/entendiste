<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\RespuestasController;
use App\Http\Controllers\api\AsignaturasController;
use App\Http\Controllers\api\AsignaturaController;
use App\Http\Controllers\api\UserController;
use App\Http\Controllers\LoginController;

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

Route::get('/user', [UserController::class, 'index']);
Route::get('/login', [UserController::class, 'validateLogin']);
Route::post('/register', [LoginController::class, 'registerStudent']);
Route::get('/asignaturas', [AsignaturasController::class, 'index']);
Route::get('/asignaturas-buscar', [AsignaturasController::class, 'search']);
Route::get('/asignaturas-ingresar', [AsignaturasController::class, 'access']);
Route::get('/preguntas', [AsignaturaController::class, 'index']);
Route::get('/estadisticas', [RespuestasController::class, 'statistics']);
Route::get('/respuesta', [RespuestasController::class, 'index']);
Route::post('/respuesta', [RespuestasController::class, 'update']);