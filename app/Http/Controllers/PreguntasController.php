<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PreguntasController extends Controller
{
    public function __invoke($id, $asignatura)
    {
        return view('preguntas', ['pregunta' => $id]);
    }
}
