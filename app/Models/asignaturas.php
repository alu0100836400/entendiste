<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class asignaturas extends Model
{
    use HasFactory;
    
    public $timestamps = true;
    protected $primaryKey = "idAsignatura";
    protected $fillable = ['updated_at'];

    function preguntas() {
        return $this->hasMany('App\Models\preguntas');
    }

    function user() {
        return $this->hasOne('App\Models\User');
    }

    // function pertenenciaAsignaturas() {
    //     return $this->hasMany('App\Models\pertenenciaAsignaturas');
    // }

    static function insertarNueva($idAsignatura, $nombreAsignatura, $password) {
        DB::table('asignaturas')->insert([
            'idAsignatura' => $idAsignatura,
            'idProfesorAlta' => $_COOKIE['user'],
            'nombreAsignatura' => $nombreAsignatura,
            'password' => $password,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }

    static function buscarAsignatura($asignatura, $modo) {
        if($modo == 1) $attribute = 'idAsignatura';
        else $attribute = 'nombreAsignatura';

        $response = asignaturas::where($attribute, 'like', '%'.$asignatura.'%')->get();
        $array_response = [];
        foreach($response as $item) {
            $asignatura_ = ['id' => $item->attributes['idAsignatura'],
                            'nombre' => $item->attributes['nombreAsignatura'],
                            'password' => $item->attributes['password']];
            array_push($array_response, $asignatura_);
        }
        return $array_response;
    }
}
