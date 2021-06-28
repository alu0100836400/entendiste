@extends('layouts.app')

@section('title', 'Cuenta')

@section('content')
    - cambiar contraseña<br/>
    - modo oscuro?<br/>
    <br/><br/>
    Web<br/>
    -ver cuantos han contestado<br/>
    APP<br/>
    -buscar solo asignaturas que no tenga en mi lista<br/>
    -poner la imagen principal<br/>
    -configuracion (cambiar contraseña, cambiar nombre)<br/>
    -hacer ver que la lista está vacía cuando no hay items<br/>
    -cambiar el estilo al spinner<br/>
    -[futuro] cambiar tonalidad de cada tema según la respuesta

@endsection

<?php
use App\Models\respuestas;

//respuestas::setRespuesta('3', 'alu001', '0');

//respuestas::respuestaByPregunta('15', 'alu001');

?>