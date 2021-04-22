<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class asignaturas extends Model
{
    use HasFactory;

    function preguntas() {
        return $this->hasMany('App\Models\preguntas');
    }

    function user() {
        return $this->hasOne('App\Models\User');
    }

    // function pertenenciaAsignaturas() {
    //     return $this->hasMany('App\Models\pertenenciaAsignaturas');
    // }
}
