@foreach ($preguntas as $pregunta)
{{$cont++}}
<a class="li-asignaturas" href="{{route('pregunta', ['asignatura' => $asignatura, 'pregunta' => $pregunta['pregunta']])}}"><div class="mix category-1" data-myorder="{{$cont}}" asignatura="{{$pregunta['pregunta']}}"></div></a>
@endforeach










<a class="mix category-1" data-myorder="{{$cont}}" asignatura="{{$pregunta['pregunta']}}" href="{{route('pregunta', ['asignatura' => $asignatura, 'pregunta' => $pregunta['pregunta']])}}">
    <div style="display:inline;visibility:visible">Titulo</div>
  @include('layouts.mini-diagram')
</a>






