<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function validateLogin(Request $request) {
        $user = User::where('idUsuario', $request->username)->where('password', $request->password)->get();
        if($user->count() == 1) return response()->json(['key' => 'true']);
        else return response()->json(['key' => 'false']);
    }
}
