@extends('layouts.app')

@section('title', 'Asignaturas')
@section('head')
    <link rel="stylesheet" href="{{asset('css/asignaturas.css')}}">
@endsection

@section('content')
    Asignaturas
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
      @include('components.add-button')
    <div id="Container" class="container">
        {{$cont = 0}}
        @foreach ($asignaturas as $asignatura)
            {{$cont++}}
            <a class="li-asignaturas" href="{{route('asignatura', $asignatura['id'])}}"><div class="mix category-1" data-myorder="{{$cont}}" asignatura="{{$asignatura['nombre']}}"></div></a>
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
    @include('components.add-modal', [  'titulo' => 'Nueva asignatura',
                                        'ruta' => route('nuevaAsignatura'),
                                        'campos' => ['ID', 'Nombre', 'Password']]) 
@endsection