@extends('layouts.app')

@section('title', 'Inicio')
@section('head')
    <link rel="stylesheet" href="{{asset('css/inicio.css')}}">
@endsection

@section('content')
<p>
    <span>
        Esta web forma parte del Trabajo de Fin de Grado <br><br><label class="italic">"Herramienta para la obtención de 
        feedback por parte del alumnado".</label> <br><br>Escuela Superior de Ingeniería y Tecnología. 
        <br>Universidad de La Laguna
    </span>
    &mdash; Javier Alberto Martín &mdash;
  </p>

@endsection