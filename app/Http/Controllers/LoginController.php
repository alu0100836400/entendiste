<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

define("ONE_MONTH_", 2592000);

class LoginController extends Controller
{
    public function index() {
        setcookie("user", "", time()-1);
        return view('login');
    }

    public function validateLogin(Request $request) {
        $user = User::where('idUsuario', $request->login)->where('password', $request->password)->where('rol', 1)->get();
        if($user->count() == 1) {
            setcookie("user", $request->login, time()+ONE_MONTH_);
            return view('validation');
        }
        else {
            return view('login');
        }
    }
}
