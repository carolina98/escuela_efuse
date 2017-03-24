@extends ('layout.inventario')
@section('content')
<ul>
@foreach($inventario as $inventario)
<li>
{{$inventario->nombre}}
{{$inventario->cantidad}}
</br>
<a href="{{url ('Editar inventario',$inventario->id)}}">Editar inventario </a> ---
<a href="{{url ('Eliminar inventario',$inventario->id)}}">Eliminar inventario</a>
</li>
@endforeach
</ul>
@endsection