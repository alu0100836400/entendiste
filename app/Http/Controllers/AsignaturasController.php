<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AsignaturasController extends Controller
{
    public function __invoke() {
        return view('asignaturas');
    }
}
