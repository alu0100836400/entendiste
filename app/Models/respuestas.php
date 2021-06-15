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

    static function respuestaByPregunta($idPregunta, $user) {
        $response = respuestas::where('idPregunta', $idPregunta)->where('idAlumno', $user)->get()->all();
        $array_ = [];
        foreach($response as $item) {
            $array_response = [ 'idPregunta' => $item->attributes['idPregunta'],
                                'idAlumno'   => $item->attributes['idAlumno'],
                                'respuesta'  => (bool)$item->attributes['respuesta'],
                                'empty'      => (bool)false];
            array_push($array_, $array_response);
        }

        
        if(count($array_) == 0) return ['idPregunta' => '0',
                                        'idAlumno'   => '0',
                                        'respuesta'  => (bool)false,
                                        'empty'      => (bool)true];
        else return $array_[0];
    }
}
