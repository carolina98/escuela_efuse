@extends ('layout.entrenador')
@section('content')
<ul>
@foreach($entrenador as $entrenador)
<li>


{{$entrenador->nombre}}
{{$entrenador->apellido}}
{{$entrenador->identificacion}}
{{$entrenador->telefono}} 
{{$entrenador->direccion}}</br>
<a href="{{url ('Editar entrenador',$entrenador->id)}}">Editar entrenador </a> ---
<a href="{{url ('Eliminar entrenador',$entrenador->id)}}">Eliminar entrenador</a>
</li>
@endforeach
</ul>
@endsection