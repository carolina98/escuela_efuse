@extends ('layout.inventario')
@section('content')
<body>
<form id="actualizar_inventario" name="actualizar_inventario" method="post" action="{{url('actualizar_inventario',$inventario-> id)}}">
{!!csrf_field()!!}
  <div align="center">
    <table width="409" border="1">
      <tr>
        <td>Nombre del implemento:</td>
        <td><label>
          <input name="nombre" type="text" id="nombre" value="{{$inventario->nombre}}"/> 
        </label></td>
      </tr>
      <tr>
        <td>cantidad</td>
        <td><label>
          <input name="cantidad" type="text" id="cantidad" value="{{$inventario->cantidad}}"/>
        </label></td>
      </tr>
    <td colspan="2"> <label>
        <div align="center">
          <input type="submit" name="Submit" value="consultar inventario" />
        </div>
        </label></td>
      </tr>
    </table>
  </div>
</form>
</body>
</html>

@endsection