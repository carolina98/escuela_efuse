@extends ('layout.alumnos')
@section('content')
<ul>
@foreach($alumnos as $alumnos)
<li>
{{$alumnos->nombre}}
{{$alumnos->apellido}}
{{$alumnos->telefono}} 
{{$alumnos->direccion}}
{{$alumnos->acudiente}}
{{$alumnos->identificacion}}
{{$alumnos->fecha_nacimiento}}
{{$alumnos->edad}}
{{$alumnos->eps}}</br>
<a href="{{url ('Editar alumnos',$alumnos->id)}}">Editar alumnos </a> ---
<a href="{{url ('Eliminar alumnos',$alumnos->id)}}">Eliminar alumnos</a>
</li>
@endforeach
</ul>
@endsection