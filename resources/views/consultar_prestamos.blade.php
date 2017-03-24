@extends ('layout.prestamos')
@section('content')
<ul>
@foreach($prestamos as $prestamos)
<li>

{{$prestamos->id}}
{{$prestamos->nombre}}
{{$prestamos->cantidad}}
{{$prestamos->fecha_prestamo}}
{{$prestamos->fecha_entrega}}
{{$prestamos->nombre_entrenador}}
{{$prestamos->identificacion}}

</br>
<a href="{{url ('Editar prestamos',$prestamos->id)}}">Editar prestamos </a> ---
<a href="{{url ('Eliminar prestamos',$prestamos->id)}}">Eliminar prestamos </a>
</li>
@endforeach
</ul>
@endsection