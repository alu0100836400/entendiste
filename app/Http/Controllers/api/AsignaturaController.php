<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\preguntas;

class AsignaturaController extends Controller
{
    public function index(Request $request) {

        return json_encode(preguntas::preguntasByAsignatura($request->idAsignatura));
    }
}
