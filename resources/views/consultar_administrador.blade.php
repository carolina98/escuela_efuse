@extends ('layout.administrador')
@section('content')
<ul>
@foreach($administrador as $administrador)
<li>

{{$administrador->id}}
{{$administrador->nombre}}
{{$administrador->apellido}}
{{$administrador->identificacion}}
{{$administrador->direccion}}
{{$administrador->telefono}} </br>
<a href="{{url ('Editar administrador',$administrador->id)}}">Editar administrador </a> ---
<a href="{{url ('Eliminar administrador',$administrador->id)}}">Eliminar administrador </a>
</li>
@endforeach
</ul>
@endsection