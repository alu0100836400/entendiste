@extends('layouts.app')

@section('title', $pregunta)

@section('content')
    Este es el tema {{$pregunta}} y la asignatura {{$asignatura}}
    @include('layouts.mini-diagram')
@endsection