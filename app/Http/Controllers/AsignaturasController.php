<?php

namespace App\Http\Controllers;

use App\Models\asignaturas;
use App\Models\perteneceAsignaturas;
use Illuminate\Http\Request;

class AsignaturasController extends Controller
{

    public function index() {
        return view('asignaturas', ['asignaturas' => perteneceAsignaturas::asignaturasByUsuario($_COOKIE['user'])]);
    }

    public function show($asignatura) {
        return view('asignatura', ['asignatura' => $asignatura]);
    }

    public function create(Request $request) { //https://www.ull.es/apps/guias/guias/view_degree/588/ aquí todos los códigos
        asignaturas::insertarNueva($request->ID, $request->Nombre, $request->Password);
        perteneceAsignaturas::insertarNueva($request->ID, $_COOKIE['user']);
        return view('asignaturas', ['asignaturas' => perteneceAsignaturas::asignaturasByUsuario($_COOKIE['user'])]);
    }
}
