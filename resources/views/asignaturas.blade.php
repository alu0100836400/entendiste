@extends('layouts.app')

@section('title', 'Asignaturas')
@section('head')
    <link rel="stylesheet" href="{{asset('css/asignaturas.css')}}">
@endsection

@section('content')
    Asignaturas
    <ul>
        @foreach ($asignaturas as $asignatura)
            <li><a class="li-asignaturas" href="{{route('asignatura', $asignatura)}}">{{$asignatura}}</a></li>
        @endforeach
    </ul>

    <?php
        use App\Models\User;

        $user = User::find("alu0100836400");
        //echo $user;

    ?>
    
    <div class="controls">
        <label>Filter:</label>
        
        <button class="filter" data-filter="all">All</button>
        <button class="filter" data-filter=".category-1">Category 1</button>
        <button class="filter" data-filter=".category-2">Category 2</button>
      </div>
      
      <div class="pager-list">
          <!-- Pagination buttons will be generated here -->
      </div>
      
      <div id="Container" class="container">
        <div class="mix category-1" data-myorder="1"></div>
        <div class="mix category-1" data-myorder="2"></div>
        <div class="mix category-1" data-myorder="3"></div>
        <div class="mix category-2" data-myorder="4"></div>
        <div class="mix category-1" data-myorder="5"></div>
        <div class="mix category-1" data-myorder="6"></div>
        <div class="mix category-2" data-myorder="7"></div>
        <div class="mix category-2" data-myorder="8"></div>
        
        <div class="gap"></div>
        <div class="gap"></div>
      </div>

      <script> 
        $(function(){
            $('#Container').mixItUp();
        });
      </script>
@endsection