<?php

namespace App\Http\Controllers;
use App\Models\perteneceAsignaturas;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke() {
        return view('inicio', ['asignRecientes' => perteneceAsignaturas::asignaturasRecientes()]);
    }
}