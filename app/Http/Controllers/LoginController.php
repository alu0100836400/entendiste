<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\perteneceAsignaturas;
use App\Models\asignaturas;
use Illuminate\Http\Request;

define("ONE_MONTH_", 2592000);

class LoginController extends Controller
{
    public function index() {
        return view('login');
    }

    public function validateLogin(Request $request) {
        $user = User::where('idUsuario', $request->login)->where('password', $request->password)->get();
        if($user->count() == 1) {
            setcookie("user", $request->login, time()+ONE_MONTH_);
            return view('inicio', ['asignRecientes' => perteneceAsignaturas::asignaturasRecientes()]);
        }
        else {
            return view('login');
        }
    }
}
