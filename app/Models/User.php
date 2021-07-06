<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

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

    // function pertenenciaAsignaturas() {
    //     return $this->hasMany('App\Models\pertenenciaAsignaturas');
    // }
}
