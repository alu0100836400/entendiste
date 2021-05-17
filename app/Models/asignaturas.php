<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class asignaturas extends Model
{
    use HasFactory;
    
    protected $timestamps = true;

    function preguntas() {
        return $this->hasMany('App\Models\preguntas');
    }

    function user() {
        return $this->hasOne('App\Models\User');
    }

    static function asignaturasRecientes() {
        return ['AEDA', 'Procesadores de Lenguajes'];
        //$recientes = $this->where();
    }

    // function pertenenciaAsignaturas() {
    //     return $this->hasMany('App\Models\pertenenciaAsignaturas');
    // }
}
