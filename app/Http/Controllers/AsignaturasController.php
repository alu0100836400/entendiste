<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AsignaturasController extends Controller
{

    public function index() {
        return view('asignaturas');
    }

    public function show($asignatura) {
        return view('asignatura', ['asignatura' => $asignatura]);
    }
}
