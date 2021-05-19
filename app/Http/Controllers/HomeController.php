<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke($asignaturasRecientes) {
        return view('inicio', ['asignRecientes' => $asignaturasRecientes]);
    }
}
