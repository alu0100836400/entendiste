<?php

namespace App\Http\Controllers;

use App\Models\perteneceAsignaturas;
use Illuminate\Http\Request;

class AsignaturasController extends Controller
{

    public function index() {
        return view('asignaturas', ['asignaturas' => perteneceAsignaturas::asignaturasByUsuario()]);
    }

    public function show($asignatura) {
        return view('asignatura', ['asignatura' => $asignatura]);
    }
}
