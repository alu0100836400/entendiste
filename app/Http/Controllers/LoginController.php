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

    public function registerTeacher(Request $request) {
        if($request->password != $request->password2) {
            return view('login', ['msg' => 'Las contraseñas no coinciden']);
        }
        else {
            $user = User::where('idUsuario', $request->login)->get();
            if($user->count() > 0) {
                return view('login', ['msg' => 'El usuario ya existe']);
            }
            else {
                if(LoginController::registerUser($request, 1)) return view('login', ['msg' => 'Mensaje enviado, revisa tu correo']);
                else return view('login', ['msg' => 'Lo sentimos. No se ha podido enviar el correo de verificación.']);
            }
        }
    }

    public function registerStudent(Request $request) {
        $user = User::where('idUsuario', $request->login)->get();
        if($user->count() > 0) {
            return json_encode(['error' => (bool)true, 
                                'msg_error' => 'El usuario ya existe']);
        }
        else {
            if(LoginController::registerUser($request, 0)) return json_encode([ 'error' => (bool)false, 
                                                                                'msg_error' => '']);
            else return json_encode(['error' => (bool)true, 
                                     'msg_error' => 'Lo sentimos. No se ha podido enviar el correo de verificación.']);
        }
    }

    public static function registerUser(Request $request, $rol) {
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
        $headers = 'From:entendiste.ull@gmail.com' . "\r\n";
        if(mail($to, $subject, $message, $headers)) {
            User::insertarNuevo($request->login, $request->password, $rol, $hash);
            return true;
        }
        else {
            //algo ha ido mal enviando el correo 
            return false;
        }
    }

    public function verify(Request $request) {
        //ver si coinciden los hash
        $user = User::where('idUsuario', $request->email)->get()->first();
        if($user['hash'] == $request->hash)
            return view('login', ['msg' => 'Ya puedes iniciar sesión']);
        else
            return view('login', ['msg' => 'Los hash no coinciden']);
    }
}