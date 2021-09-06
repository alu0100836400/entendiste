@extends('layouts.app')

@section('title', $asignatura['nombreAsignatura'])
@section('head')
    <link rel="stylesheet" href="{{asset('css/asignaturas.css')}}">
@endsection

@section('content')
<!-- el ordenamiento no rula todavia
    <div class="controls">
        <label>Filter:</label>
        <button class="filter" data-filter="all">Todo</button>
        <button class="filter" data-filter=".category-1">A-Z</button>
        <button class="filter" data-filter=".category-2">Fecha</button>
    </div>
-->
      
    <div class="pager-list">
          <!-- Pagination buttons will be generated here -->
    </div>
    @include('components.add-button')
    <div id="Container" class="container">
        {{$cont = 0}}

        @foreach ($preguntas as $pregunta)
            {{$cont++}}
            {{$tema = $pregunta['pregunta']}}
            {{$clase = str_replace(' ', '', $tema)}}
            
            <div class="mix category-1" data-myorder="{{$cont}}" asignatura="{{$tema}}">
                <div></div>
                <span>@include('components.mini-diagram', ['porcentaje' => $pregunta['porcentaje'], 
                                                        'objectrotate' => $clase, 
                                                        'pieSlice1' => ($clase.'1'), 
                                                        'pieSlice2' => ($clase.'2')]) </span>
                <div class="subject-info">Han contestado {{$pregunta['numRespuestas']}} personas</div><br/>
                <div class="subject-info">Dado de alta por {{$pregunta['nombreProfesor']}} el día {{$pregunta['fechaCreacion']}}</div>  
            </div>
            
        @endforeach
        <div class="gap"></div>
        <div class="gap"></div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.mixitup/latest/jquery.mixitup.min.js"></script>
    <script type="text/javascript"> 
        $(function(){
            $('#Container').mixItUp();
        });
    </script>
@endsection
@section('modal')
    @include('components.add-modal', [  'titulo' => 'Nuevo tema',
                                        'ruta' => route('nuevaPregunta', $asignatura['idAsignatura']),
                                        'campos' => ['Tema']]) 
@endsection