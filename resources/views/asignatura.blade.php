@extends('layouts.app')

@section('title', $asignatura['nombreAsignatura'])
@section('head')
    <link rel="stylesheet" href="{{asset('css/asignaturas.css')}}">
@endsection

@section('content')
    Esta es la asignatura {{$asignatura['nombreAsignatura']}}


    <div class="controls">
        <label>Filter:</label>
        <!-- el ordenamiento no rula todavia -->
        <button class="filter" data-filter="all">Todo</button>
        <button class="filter" data-filter=".category-1">A-Z</button>
        <button class="filter" data-filter=".category-2">Fecha</button>
      </div>
      
      <div class="pager-list">
          <!-- Pagination buttons will be generated here -->
      </div>
    <div id="Container" class="container">
        {{$cont = 0}}

        @foreach ($preguntas as $pregunta)
            {{$cont++}}
            <div class="mix category-1" data-myorder="{{$cont}}" asignatura="{{$pregunta['pregunta']}}">
                <span>@include('layouts.mini-diagram')</span>
                <div style="display:inline;visibility:visible">Titulo</div>
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