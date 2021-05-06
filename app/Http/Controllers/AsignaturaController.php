<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AsignaturaController extends Controller
{
    public function index($asignatura) {
        return view('asignatura', $asignatura);
    }
}
