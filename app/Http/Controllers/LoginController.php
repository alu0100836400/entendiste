<?php

namespace App\Http\Controllers;
use App\Models\User;

class LoginController extends Controller
{
    public function index() {
        return view('login');
    }

    public function validateLogin($iduser, $password) {
        $user = User::where('idUsuario', $iduser)->where('password', $password)->get();
        if($user->count() == 1) {
            return view('inicio');
        }
        else {
            return view('login');
        }
    }
}
