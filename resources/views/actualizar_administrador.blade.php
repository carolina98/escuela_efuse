@extends ('layout.administrador')
@section('content')
<body>
<form id="actualizar_administrador" name="actualizar_administrador" method="post" action="{{url('actualizar_administrador',$administrador->id)}}">
{!!csrf_field()!!}
  <div align="center">
    <table width="409" border="1">
      <tr>
        <td>Nombre:</td>
        <td><label>
          <input name="nombre" type="text" id="nombre" value="{{$administrador->id}}" />
        </label></td>
      </tr>
      <tr>
        <td>Apellido</td>
        <td><label>
          <input name="apellido" type="text" id="apellido"  value="{{$administrador->apellido}}" />
        </label></td>
      </tr>
      <tr>
       <td>identificacion</td>
        <td><label>
          <input name="identificacion" type="text" id="identificacion"  value="{{$administrador->identificacion}}" />
        </label></td>
      </tr>
      <tr>
        <tr>
        <td>telefono:</td>
        <td><label>
          <input name="telefono" type="text" id="telefono" value="{{$administrador->telefono}}" />
        </label></td>
      </tr>
    <td>Direccion</td>
        <td><label>
          <input name="direccion" type="text" id="direccion" value="{{$administrador->direccion}}" />
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