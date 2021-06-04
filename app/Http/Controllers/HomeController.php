<?php

namespace App\Http\Controllers;
use App\Models\perteneceAsignaturas;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke() {
        if(!isset($_COOKIE['user'])) $user = "";
        else $user = $_COOKIE['user'];
        return view('inicio', ['asignRecientes' => perteneceAsignaturas::asignaturasRecientes($user)]);
    }
}