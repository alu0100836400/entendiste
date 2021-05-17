<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class respuestas extends Model
{
    use HasFactory;

    protected $primaryKey = ['idPregunta', 'idAlumno'];
    protected $timestamps = true;

    function preguntas() {
        return $this->hasOne('App\Models\preguntas');
    }

    function user() {
        return $this->hasOne('App\Models\User');
    }
}
