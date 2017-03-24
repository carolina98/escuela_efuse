@extends ('layout.entrenador')
@section('content')
<body >
<form id="actualizar_entrenador" name="actualizar_entrenador" method="post" action="{{url('actualizar_entrenador',$entrenador->id)}}">
{!!csrf_field()!!}
  <div align="center">
    <table width="409" border="0" bgcolor="ccccc">
      <tr>
        <td>Nombre:</td>
        <td><label>
          <input name="nombre" type="text" id="nombre" value="{{$entrenador->nombre}}"/>
        </label></td>
      </tr>
      <tr>
        <td>Apellido</td>
        <td><label>
          <input name="apellido" type="text" id="apellido" value="{{$entrenador->apellido}}"/>
        </label></td>
      </tr>
      <tr>
       <td>identificacion</td>
        <td><label>
          <input name="identificacion" type="text" id="identificacion" value="{{$entrenador->identificacion}}" />
        </label></td>
      </tr>
      <tr>
        <tr>
        <td>telefono:</td>
        <td><label>
          <input name="telefono" type="text" id="telefono" value="{{$entrenador->telefono}}"/>
        </label></td>
      </tr>
    <td>Direccion</td>
        <td><label>
          <input name="direccion" type="text" id="direccion" value="{{$entrenador->direccion}}" />
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