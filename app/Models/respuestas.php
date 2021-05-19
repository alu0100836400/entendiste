<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class respuestas extends Model
{
    use HasFactory;

    protected $primaryKey = ['idPregunta', 'idAlumno'];
    public $timestamps = true;

    function preguntas() {
        return $this->hasOne('App\Models\preguntas', 'idPregunta'); //cambiar, no rula
    }

    function user() {
        return $this->hasOne('App\Models\User');
    }
}
