<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

define("MAX_RECENT_SUBJECTS_", 5);

class perteneceAsignaturas extends Model
{
    use HasFactory;

    protected $primaryKey = ['idAsignatura', 'idUsuario'];
    protected $table = 'perteneceasignaturas';
    public $timestamps = true;

    static function asignaturasByUsuario($user) {
        if(!isset($user)) return ['empty'];
        else {
            $response = perteneceAsignaturas::join('asignaturas', 'perteneceAsignaturas.idAsignatura', 'asignaturas.idAsignatura')
                                        ->select('asignaturas.idAsignatura', 'asignaturas.nombreAsignatura')
                                        ->where('idUsuario', $user)
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

    static function asignaturasRecientes($user) {
        return array_slice(perteneceAsignaturas::asignaturasByUsuario($user), 0, MAX_RECENT_SUBJECTS_, true);
    }

    static function insertarNueva($idAsignatura, $usuario) {
        $response = DB::table('perteneceasignaturas')->insert([
            'idAsignatura' => $idAsignatura,
            'idUsuario' => $usuario,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        if($response != true) $response = false;
        return ['insercionCorrecta' => $response];
    }
}