<?php

namespace App\Http\Controllers;
use App\Models\User;

class LoginController extends Controller
{
    public function __invoke() {
        return view('login');
    }

    public function login($iduser, $password) {
        $user = User::where('idUsuario', $iduser)->where('password', $password)->get();
        if($user->count() == 1) {
            return true;
        }
        else {
            return false;
        }
    }
}
