<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class perteneceAsignaturas extends Model
{
    use HasFactory;

    protected $primaryKey = ['idAsignatura', 'idUsuario'];
    protected $table = 'perteneceasignaturas';
    public $timestamps = true;

    function asignaturasByUsuario($idUsuario) {} //no se necesita saber
    
    static function usuariosByAsignatura($idAsignatura) {
        if(!isset($idAsignatura)) return [];
        else {
            $response = perteneceAsignaturas::join('users', 'perteneceAsignaturas.idUsuario', 'users.idUsuario')
                                        ->select('users.idUsuario as id', 'nombre', 'apellidos')
                                        ->where('idAsignatura', $idAsignatura)
                                        ->orderBy('perteneceAsignaturas.updated_at', 'desc')->get()->all();
            $array_alumnos = [];
            foreach($response as $item) {
                $array_alumno = ['id' => $item->attributes['id'],
                                 'nombre' => $item->attributes['nombre'],
                                 'apellidos' => $item->attributes['apellidos']];
            
                array_push($array_alumnos, $array_alumno);
            }
            return $array_alumnos;
        }
    }

    static function asignaturasRecientes() {
        if(!isset($_COOKIE['user'])) return ['empty'];
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