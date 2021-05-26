<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PreguntasController extends Controller
{
    public function __invoke($asignatura, $pregunta)
    {
        return view('preguntas', ['pregunta' => $pregunta, 'asignatura' => $asignatura]);
    }
}
