<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\perteneceAsignaturas;

class AsignaturasController extends Controller
{
    public function index(Request $request) {

        return json_encode(perteneceAsignaturas::asignaturasByUsuario($request->user));

        //return response()->json(['key' => 'value']);
    }
}
