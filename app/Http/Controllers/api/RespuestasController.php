<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\respuestas;
use Illuminate\Http\Request;

class RespuestasController extends Controller
{
    static public function index(Request $request) {
        $response = respuestas::respuestaByPregunta($request->idPregunta, $request->user);
        return json_encode($response);
    }

    static public function update(Request $request) {
        $response = respuestas::setRespuesta($request->idPregunta, $request->user, $request->respuesta);
        return json_encode($response);
    }

    static public function statistics(Request $request) {
        $response = respuestas::respuestasByPregunta($request->idPregunta);
        return json_encode($response);
    }
}
