@foreach ($preguntas as $pregunta)
{{$cont++}}
<a class="li-asignaturas" href="{{route('pregunta', ['asignatura' => $asignatura, 'pregunta' => $pregunta['pregunta']])}}"><div class="mix category-1" data-myorder="{{$cont}}" asignatura="{{$pregunta['pregunta']}}"></div></a>
@endforeach










<a class="mix category-1" data-myorder="{{$cont}}" asignatura="{{$pregunta['pregunta']}}" href="{{route('pregunta', ['asignatura' => $asignatura, 'pregunta' => $pregunta['pregunta']])}}">
    <div style="display:inline;visibility:visible">Titulo</div>
  @include('layouts.mini-diagram')
</a>






<?php
/*
 
Conv. Julio TFG: Acta 16.Jul.2021
Entrega memoria: viernes 2 de julio de 2021
 Propuesta tribunal: martes 6 de julio de 2021
Aprobación de los tribunales (reunión CTFG): jueves 8 de julio de 2021
Defensa oral (calendario académico): martes 13 a viernes 16 de julio de 2021
 Entrega documentación en Secretaría: viernes 16 de julio de 2021 (13:00) 
*/
?>

https://programacionymas.com/blog/consumir-una-api-usando-retrofit

https://aprendible.com/series/laravel-desde-cero

https://eloquentbyexample.com/course/lesson/lesson-10-relationships-i

https://programacionymas.com/blog/consumir-una-api-usando-retrofit

https://www.udemy.com/course/curso-intensivo-de-laravel-y-android-usando-jwt-y-kotlin/?referralCode=6589DEAB7DB1B010DFC3


DB::enableQueryLog();
// query

DB::getQueryLog();