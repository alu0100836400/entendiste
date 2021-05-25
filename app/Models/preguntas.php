<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
                $array_pregunta = ['id' => $item->attributes['idPregunta'],
                                 'idAsignatura' => $item->attributes['idAsignatura'],
                                 'pregunta' => $item->attributes['pregunta']];
            
                array_push($array_preguntas, $array_pregunta);
            }
            return $array_preguntas;
        }
    }
}
