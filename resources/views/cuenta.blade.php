@extends('layouts.app')

@section('title', 'Cuenta')

@section('content')
    - cambiar contraseña<br/>
    - modo oscuro?<br/>
    <br/><br/>
    Web<br/>
    -mejorar info de cada tema<br/>
    -terminar ordenamiento<br/>
    APP<br/>
    -configuracion (cambiar contraseña, cambiar nombre)<br/>
    -[futuro] cambiar tonalidad de cada tema según la respuesta

@endsection

<?php
use App\Models\respuestas;

//respuestas::setRespuesta('3', 'alu001', '0');

//respuestas::respuestaByPregunta('15', 'alu001');

?>