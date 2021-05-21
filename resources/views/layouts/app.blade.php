<!DOCTYPE html>
<head>
  <meta charset="UTF-8">
  <title>Entendiste | @yield('title')</title>
  <link rel="stylesheet" href="{{asset('css/menu-bar.css')}}">
</head>
<body>
  <?php
    if(!isset($_COOKIE["user"]))
      echo "<script> window.location.replace('".route('login')."') </script>";
  ?>
  <div class="dropdown">
    <nav>
      <img src="{{asset('images/logo-largo.png')}}" alt="logo" class="logo" />
      <ul>
        <li><a href="{{route('inicio')}}">Inicio</a></li>
        <li>
          <a href="{{route('asignaturas')}}">Asignaturas <i class="fas fa-caret-down"></i></a>
          <ul>
            <?php 
              use App\Models\perteneceAsignaturas;
              $asignRecientes = perteneceAsignaturas::asignaturasRecientes();
            ?>
            <li><a href="{{route('asignaturas')}}">TODAS</a></li>
            @foreach ($asignRecientes as $item)
              <li><a class="li-asignaturas" href="{{route('asignatura', $item)}}">{{$item}}</a></li>
            @endforeach
          </ul>
        </li>
        <li><a href="#">Cuenta<i class="fas fa-caret-down"></i></a></li>
        <li><a href="{{route('login')}}">Salir</a></li>
      </ul>
    </nav>
  </div>
  <div class="container">
    @yield('content')
  </div>
</body>