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

    static function respuestasByPregunta($idPregunta) {
        $response = respuestas::where('idPregunta', $idPregunta)->get()->all();
        $entienden = 0;
        $noEntienden = 0;
        foreach($response as $item) {
            if($item->attributes['respuesta'] == 0) $noEntienden++;
            else $entienden++;
        }
        $responden = $entienden + $noEntienden;
        if($responden == 0) $porcentaje = 0;
        else {
            $porcentaje = round(($entienden/$responden)*100);
        } 
        return ['porcentaje'        => $porcentaje,
                'respondieron'      => $responden,
                'entendieron'       => $entienden,
                'noEntendieron'     => $noEntienden];
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
                    'empty'      => (bool)false];
        if($response != 2 && $response != 1) $body['error'] = (bool)true;
        else $body['error'] = (bool)false;

        return $body;
    }
}