<?php

namespace App\Http\Controllers;
use App\Models\preguntas;
use App\Models\asignaturas;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class AsignaturaController extends Controller
{
    public function index($id) {
        return view('asignatura', ['preguntas' => preguntas::preguntasByAsignatura($id), 'asignatura' => asignaturas::find($id)]);
    }

    public function create(Request $request, $idAsignatura) {
        preguntas::insertarNueva($idAsignatura, $request->Tema);
        asignaturas::find($idAsignatura)->update(['updated_at' => Carbon::now()->format('Y-m-d H:i:s')]);
        return view('asignatura', ['preguntas' => preguntas::preguntasByAsignatura($idAsignatura), 'asignatura' => asignaturas::find($idAsignatura)]);
    }
}
