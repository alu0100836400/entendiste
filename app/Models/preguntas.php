<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class preguntas extends Model
{
    use HasFactory;

    protected $primaryKey = 'idPregunta';
    public $timestamps = true;

    function propietario() {
        return $this->hasOne(User::class);
    }

    function asignatura() {
        return $this->hasOne(asignaturas::class);
    }

    function respuestas() {
        return $this->hasMany(respuestas::class, 'idPregunta', 'idPregunta');
    }

    static function preguntasByAsignatura($idAsignatura) {

        if(!isset($idAsignatura)) return [];
        else {
            $response = preguntas::where('idAsignatura', $idAsignatura)
                                        ->orderBy('preguntas.created_at', 'desc')->get()->all();
            $array_preguntas = [];
            foreach($response as $item) {
                $porcentaje = preguntas::porcentajeByPregunta($item);
                $array_pregunta = ['id' => $item->attributes['idPregunta'],
                                 'idAsignatura' => $item->attributes['idAsignatura'],
                                 'pregunta' => $item->attributes['pregunta'],
                                 'porcentaje' => $porcentaje['porcentaje'],
                                 'numRespuestas' => $porcentaje['numRespuestas']];
            
                array_push($array_preguntas, $array_pregunta);
            }
            return $array_preguntas;
        }
    }

    static function porcentajeByPregunta($pregunta) {
        $positivos = $pregunta->respuestas()->where('respuesta', 1)->count();
        $negativos = $pregunta->respuestas()->where('respuesta', 0)->count();
        $numRespuestas = $positivos+$negativos;
        if($numRespuestas == 0) return ['porcentaje' => 0, 'numRespuestas' => 0];
        else return ['porcentaje' => ($positivos/$numRespuestas)*100, 'numRespuestas' => $numRespuestas];
    }

    static function insertarNueva($idAsignatura, $pregunta) {
        //hacer comprobaciones primero
        DB::table('preguntas')->insert([
            'idAsignatura' => $idAsignatura,
            'idProfesor' => $_COOKIE['user'],
            'pregunta' => $pregunta,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
