<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

define("MAX_RECENT_SUBJECTS_", 5);

class perteneceAsignaturas extends Model
{
    use HasFactory;

    protected $primaryKey = ['idAsignatura', 'idUsuario'];
    protected $table = 'perteneceasignaturas';
    public $timestamps = true;

    static function asignaturasByUsuario() {
        if(!isset($_COOKIE['user'])) return ['empty'];
        else {
            $response = perteneceAsignaturas::join('asignaturas', 'perteneceAsignaturas.idAsignatura', 'asignaturas.idAsignatura')
                                        ->select('asignaturas.idAsignatura', 'asignaturas.nombreAsignatura')
                                        ->where('idUsuario', $_COOKIE['user'])
                                        ->orderBy('perteneceAsignaturas.updated_at', 'desc')->get()->all();
            $array_asignaturas = [];
            foreach($response as $item) {
                $array_asignatura = ['id' => $item->attributes['idAsignatura'],
                                     'nombre' => $item->attributes['nombreAsignatura']];
                array_push($array_asignaturas, $array_asignatura);
            }

            return $array_asignaturas;
        }
    }
    
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
        return array_slice(perteneceAsignaturas::asignaturasByUsuario(), 0, MAX_RECENT_SUBJECTS_, true);
    }
}