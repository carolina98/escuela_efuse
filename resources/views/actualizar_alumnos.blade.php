@extends ('layout.alumnos')
@section('content')
<body>
<form id="actualizar_alumnos" name="actualizar_alumnos" method="post" action="{{url('actualizar_alumnos',$alumnos->id)}}">
{!!csrf_field()!!}
  <div align="center">
    <table width="409" border="1">
      <tr>
        <td>Nombre:</td>
        <td><label>
          <input name="nombre" type="text" id="nombre"  value="{{$alumnos->nombre}}"/>
        </label></td>
      </tr>
      <tr>
        <td>Apellido</td>
        <td><label>
          <input name="apellido" type="text" id="apellido" value="{{$alumnos->apellido}}" />
        </label></td>
      </tr>
      <tr>
        <td>Acudiente</td>
        <td><label>
          <input name="acudiente" type="text" id="acudiente" value="{{$alumnos->acudiente}}" />
        </label></td>
      </tr>
      <tr>
        <td>identificacion</td>
        <td><label>
          <input name="identificacion" type="text" id="identificacion" value="{{$alumnos->identificacion}}"/>
        </label></td>
      </tr>
      <tr>
        <tr>
        <td>telefono:</td>
        <td><label>
          <input name="telefono" type="text" id="telefono" value="{{$alumnos->telefono}}" />
        </label></td>
      </tr>

        <td>fecha de nacimiento </td>
        <td><label>
          <input name="fecha_nacimiento" type="date" id="fecha_nacimiento" value="{{$alumnos->fecha_nacimiento}}"/>
        </label></td>
      </tr>
      <tr>
        <td>Genero</td>
        <td><label>
          <select name="genero" id="genero" value="{{$alumnos->genero}}" >
            <option value="Select:" selected="selected">Select:</option>
            <option value="Femenino">Femenino</option>
            <option value="Masculino">Masculino</option>
            <option value="Otros">Otros</option>
          </select>
        </label></td>
      </tr>
      <tr>
        <td>Edad</td>
        <td><label>
          <select name="edad" id="edad" value="{{$alumnos->edad}}" >
            <option value="select:" selected="selected">select:</option>
            <option value="5 a&ntilde;os">5 a&ntilde;os</option>
            <option value="6 a&ntilde;os">6 a&ntilde;os</option>
            <option value="7 a&ntilde;os">7 a&ntilde;os</option>
            <option value="8 a&ntilde;os">8 a&ntilde;os</option>
            <option value="9 a&ntilde;os">9 a&ntilde;os</option>
            <option value="10 a&ntilde;os">10 a&ntilde;os</option>
            <option value="11 a&ntilde;os">11 a&ntilde;os</option>
            <option value="12 a&ntilde;os">12 a&ntilde;os</option>
            <option value="13 a&ntilde;os">13 a&ntilde;os</option>
            <option value="14 a&ntilde;os">14 a&ntilde;os</option>
            <option value="15 a&ntilde;os">15 a&ntilde;os</option>
            <option value="16 a&ntilde;os">16 a&ntilde;os</option>
            <option value="17 a&ntilde;os">17 a&ntilde;os</option>
            <option value="18 a&ntilde;os">18 a&ntilde;os</option>
          </select>
        </label></td>
      </tr>
      <tr>
        <td>Direccion</td>
        <td><label>
          <input name="direccion" type="text" id="direccion" value="{{$alumnos->direccion}}" />
        </label></td>
      </tr>
      <tr>
        <td>Eps</td>
        <td><label>
          <input type="text" name="eps" value="{{$alumnos->eps}}" />
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