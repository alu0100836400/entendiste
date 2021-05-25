<?php

namespace App\Http\Controllers;
use App\Models\preguntas;
use App\Models\asignaturas;
use Illuminate\Http\Request;

class AsignaturaController extends Controller
{
    public function index($id) {
        return view('asignatura', ['preguntas' => preguntas::preguntasByAsignatura($id), 'asignatura' => asignaturas::find($id)]);
    }
}
