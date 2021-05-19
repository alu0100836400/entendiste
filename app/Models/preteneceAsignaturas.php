<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class preteneceAsignaturas extends Model
{
    use HasFactory;

    protected $primaryKey = ['idAsignatura', 'idUsuario'];
    public $timestamps = true;

    function asignaturasByUsuario($idUsuario) {

    }
    
    function usuariosByAsignatura($idAsignatura) {

    }

    function asignaturasRecientes() {
        if(!isset($_COOKIE['user'])) return ['IB', 'Cálculo', 'Estadística'];
        else return $this->where('idUsuario', $_COOKIE['user'])->orderBy('updated_at', 'desc')->paginate(6)->get();
    }
}
