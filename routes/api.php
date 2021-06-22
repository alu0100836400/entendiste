<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\RespuestasController;
use App\Http\Controllers\api\AsignaturasController;
use App\Http\Controllers\api\AsignaturaController;
use App\Http\Controllers\api\UserController;

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
Route::get('/asignaturas', [AsignaturasController::class, 'index']);
Route::get('/asignaturas-buscar', [AsignaturasController::class, 'search']);
Route::get('/preguntas', [AsignaturaController::class, 'index']);
Route::get('/respuesta', [RespuestasController::class, 'index']);
Route::post('/respuesta', [RespuestasController::class, 'update']);