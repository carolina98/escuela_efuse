@extends ('layout.prestamos')
@section('content')
<body>
<form id="actualizar_prestamos" name="actualizar_prestamos" method="post" action="{{url('actualizar_prestamos', $prestamos->id)}}">
{!!csrf_field()!!}
  <div align="center">
    <table width="409" border="1">
        <tr>
        <td>id:</td>
        <td><label>
          <input name="id" type="text" id="id" value="{{$prestamos->id}}" />
        </label></td>
      </tr>
      <tr>
        <td>Nombre:</td>
        <td><label>
          <input name="nombre" type="text" id="nombre" value="{{$prestamos->nombre}}" />
        </label></td>
      </tr>
      <tr>
        <td>Cantidad</td>
        <td><label>
          <input name="Cantidad" type="text" id="Cantidad"  value="{{$prestamos->cantidad}}"  />
        </label></td>
      </tr>
      <tr>
       <td>fecha del prestamo</td>
        <td><label>
          <input name="fecha_prestamo" type="date" id="fecha_prestamo" value="{{$prestamos->fecha_prestamo }}" />
        </label></td>
      </tr>
      <tr>
        <tr>
        <td>fecha de entrega:</td>
        <td><label>
          <input name="fecha_entrega" type="date" id="fecha_entrega" value="{{$prestamos->fecha_entrega }}" />
        </label></td>
      </tr>
      <tr>
        <tr>
    <td>nombre del entrenador</td>
        <td><label>
          <input name="nombre_entrenador" type="text" id="nombre_entrenador" value="{{$prestamos->nombre_entrenador }}" /> 
        </label></td>
      </tr>
      <td>identificacion:</td>
        <td><label>
          <input name="identificacion" type="text" id="identificacion" value="{{$prestamos->identificacion }}" />  
        </label></td>
      </tr>
      <tr>
        <td colspan="2"> <label>
        <div align="center">
          <input type="submit" name="Submit" value="Registrarse" />
        </div>
        </label></td>
      </tr>
    </table>
  </div>
</form>
</body>
</html>

@endsection