<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class preguntas extends Model
{
    use HasFactory;

    function propietario() {
        return $this->hasOne('App\Models\User');
    }

    function asignatura() {
        return $this->hasOne('App\Models\asignaturas');
    }

    function respuestas() {
        return $this->hasMany('App\Models\respuestas');
    }
}
