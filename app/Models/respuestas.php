<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class respuestas extends Model
{
    use HasFactory;

    protected $primaryKey = ['idPregunta', 'idAlumno'];
    public $timestamps = true;

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];
    public $incrementing = false;

    protected function setKeysForSaveQuery($query)
    {
        return $query->where('idPregunta', $this->getAttribute('iPregunta'))
            ->where('idAlumno', $this->getAttribute('idAlumno'));
    }

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

    static function setRespuesta($idPregunta, $usuario, $respuesta) {
        if($respuesta == "true") $respuesta = 1; 
        else $respuesta = 0;

        $response = DB::table('respuestas')->upsert([
            'idPregunta' => $idPregunta,
            'idAlumno' => $usuario,
            'respuesta' => $respuesta,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ], ['idPregunta', 'idAlumno'], ['respuesta', 'updated_at']);

        $body = [   'idPregunta' => $idPregunta,
                    'idAlumno'   => $usuario,
                    'respuesta'  => (bool)$respuesta, //cambiar
                    'empty'      => (bool)false,
                    'error'      => "(bool)false"];
        if($response != 2) $body['error'] = (bool)true;
        else $body['error'] = (bool)false;

        return $body;
    }
}