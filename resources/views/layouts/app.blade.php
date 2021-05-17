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

<?php
/*
    <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
    </body>
</html>
*/
?>