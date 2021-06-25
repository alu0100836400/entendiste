<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\asignaturas;
use Illuminate\Http\Request;
use App\Models\perteneceAsignaturas;

class AsignaturasController extends Controller
{
    public function index(Request $request) {

        return json_encode(perteneceAsignaturas::asignaturasByUsuario($request->user));

        //return response()->json(['key' => 'value']);
    }

    public function search(Request $request) {
        return json_encode(asignaturas::buscarAsignatura($request->asignatura, $request->modo));
    }

    public function access(Request $request) {
        return perteneceAsignaturas::insertarNueva($request->asignatura, $request->user);
    }
}
