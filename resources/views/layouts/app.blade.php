@yield('fakecookie')
<?php
  if(!isset($_COOKIE["user"]))
    header(route('login')); //probar location:login.php
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
            <li><a href="{{route('asignaturas')}}">TODAS</a></li>
            <li><a href="{{route('asignatura', 'AEDA')}}">AEDA</a></li>
            <li><a href="{{route('asignatura', 'Principios de computadores')}}">Principios de computadores</a></li>
          </ul>
        </li>
        <li>
          <a href="#">Cuenta<i class="fas fa-caret-down"></i></a>
          <ul>
            <li><a href="#">Front End</a></li>
            <li><a href="#">Back End</a></li>
          </ul>
        </li>
        <li><a href="{{route('login')}}">Salir</a></li>
      </ul>
    </nav>
  </div>
  <div class="container">
    @yield('content')
  </div>
</body>