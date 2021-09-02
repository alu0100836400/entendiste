<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $primaryKey = 'idUsuario';
    public $timestamps = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    function preguntas() {
        return $this->hasMany('App\Models\preguntas');
    }

    function respuestas() {
        return $this->hasMany('App\Models\respuestas');
    }

    function asignaturasAlta() {
        return $this->hasMany('App\Models\asignaturas');
    }

    static function nameById($id) {
        $profesor = User::where('idUsuario', $id)->get()->all()[0];
        return $profesor['nombre']." ".$profesor['apellidos'];
    }

    static function insertarNuevo($user, $password, $rol, $hash) {
        $response = DB::table('users')->insert([
            'idUsuario' => $user,
            'password' => $password,
            'rol' => $rol,
            'hash' => $hash,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        if($response != true) $response = false;
        return ['insercionCorrecta' => $response];
    }

    // function pertenenciaAsignaturas() {
    //     return $this->hasMany('App\Models\pertenenciaAsignaturas');
    // }
}
