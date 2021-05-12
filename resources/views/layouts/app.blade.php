@yield('fakecookie')
<?php
  use App\Models\Asignaturas;
  if(!isset($_COOKIE["user"])){
    header('Location: ../login.blade.php');
  }
?>

<!DOCTYPE html>
<head>
  <meta charset="UTF-8">
  <title>Entendiste | @yield('title')</title>

  <link rel="stylesheet" href="{{asset('css/menu-bar.css')}}">

</head>
<body>
  <div class="dropdown">
    <nav>
      <img src="{{asset('images/logo-largo.png')}}" alt="logo" class="logo" />
      <ul>
        <li><a href="{{route('inicio')}}">Inicio</a></li>
        <li>
          <a href="{{route('asignaturas')}}">Asignaturas <i class="fas fa-caret-down"></i></a>
          <ul>
            <?php 
              $asignaturas = Asignaturas::asignaturasRecientes();
            ?>
            <li><a href="{{route('asignaturas')}}">TODAS</a></li>
            @for($i = 0; $i < count($asignaturas); $i++)
              <li><a class="li-asignaturas" href="{{route('asignatura', $asignaturas[$i])}}">{{$asignaturas[$i]}}</a></li>
            @endfor
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