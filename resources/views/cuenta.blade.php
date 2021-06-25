@extends('layouts.app')

@section('title', 'Cuenta')

@section('content')
    - cambiar contraseña<br/>
    - modo oscuro?<br/>
    <br/><br/>
    Web<br/>
    -ver cuantos han contestado<br/>
    APP<br/>
    -poner acceso a asignaturas desde cualquier activity<br/>
    -logout facil<br/>
@endsection

<?php
use App\Models\respuestas;

//respuestas::setRespuesta('3', 'alu001', '0');

//respuestas::respuestaByPregunta('15', 'alu001');

?>