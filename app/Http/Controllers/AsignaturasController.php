<?php

namespace App\Http\Controllers;

use App\Models\asignaturas;
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

    public function create(Request $request, $idAsignatura) {
        //tambien hay que actualizar la tabla perteneceAsignaturas
        asignaturas::insertarNueva($idAsignatura, $request->nombreAsignatura, $request->password);
        return view('asignaturas', ['asignaturas' => perteneceAsignaturas::asignaturasByUsuario()]);
    }
}
