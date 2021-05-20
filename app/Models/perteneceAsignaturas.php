<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\asignaturas;

class perteneceAsignaturas extends Model
{
    use HasFactory;

    protected $primaryKey = ['idAsignatura', 'idUsuario'];
    protected $table = 'perteneceasignaturas';
    public $timestamps = true;

    function asignaturasByUsuario($idUsuario) {

    }
    
    function usuariosByAsignatura($idAsignatura) {

    }

    static function asignaturasRecientes() {
        if(!isset($_COOKIE['user'])) return ['IB', 'Cálculo', 'Estadística'];
        else {
            $response = perteneceAsignaturas::join('asignaturas', 'perteneceAsignaturas.idAsignatura', 'asignaturas.idAsignatura')
                                        ->select('asignaturas.nombreAsignatura')
                                        ->where('idUsuario', $_COOKIE['user'])
                                        ->orderBy('perteneceAsignaturas.updated_at', 'desc')->get()->all();
            $array_asignaturas = [];
            foreach($response as $item)
                array_push($array_asignaturas, $item->attributes['nombreAsignatura']);

            return $array_asignaturas;
        }
    }
}
