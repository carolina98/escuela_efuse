@extends ('layout.horarios')
@section('content')
<ul>
@foreach($horarios as $horarios)
<li>


{{$horarios->categoria}}
{{$horarios->hora_llegada}}
{{$horarios->hora_salida}}</br>
<a href="{{url ('Editar',$horarios->id)}}">Editar horarios </a> ---
<a href="{{url ('Eliminar',$horarios->id)}}">Eliminar  horarios </a>
</li>
@endforeach 
</ul>
@endsection