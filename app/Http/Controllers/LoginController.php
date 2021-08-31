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

    public function registerUser(Request $request) {
        if($request->password != $request->password2) {
            return view('login', ['msg' => 'Las contraseñas no coinciden']);
        }
        else {
            $user = User::where('idUsuario', $request->login)->get();
            if($user->count() > 0) {
                return view('login', ['msg' => 'El usuario ya existe']);
            }
            else {
                $hash = md5(rand(0, 1000));
                $to = $request->login;
                $subject = 'Registro | Verificación';
                $message = '
                    Gracias por registrarte en Entendiste!
                    Tu cuenta ha sido creada, puedes iniciar sesión con estas credenciales:
                    ---------------------------------------------
                    Usuario: '.$request->login.'
                    Contraseña: '.$request->password.'
                    ---------------------------------------------
                    
                    Pero antes debes activar tu cuenta en este enlace:
                    http://entendiste.local/verify?email='.$request->login.'&hash='.$hash.'
                    ';
                $headers = 'From:noreply-entendiste@gmail.com' . "\r\n";
                if(mail($to, $subject, $message, $headers)) {
                    //poner en la base de datos el hash
                    //devolver la vista con el mensaje: revisa tu correo!!
                }
                else {
                    //algo ha ido mal enviando el correo 
                }
            }
        }
    }

    public function verify(Request $request) {
        //ver si coinciden los hash
        return view('cuenta', ['debug' => $request]);
    }
}
//https://code.tutsplus.com/es/tutorials/how-to-implement-email-verification-for-new-members--net-3824

//hay que crear la página verify
//hay que crear el correo noreply-entendiste