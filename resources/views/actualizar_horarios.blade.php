@extends ('layout.horarios')
@section('content')
<body>
<form id="actualizar_horarios" name="actualizar_horarios" method="post" action="{{url('actualizar_horarios',$horarios->id)}}">
{!!csrf_field()!!}
  <div align="center">
    <table width="409" border="1">
      <tr>
       <td>categoria:</td>
        <td><label>
          <input name="categoria" type="text" id="categoria" value="{{$horarios->categorias}}" />
        </label></td>
      </tr>
        <<td>hora llegada</td>
        <td><label>
          <select name="hora_llegada" id="hora_llegada"  value="{{$horarios->hora_llegada}}">
            <option value="select:" selected="selected">select:</option>
            <option value="8 am a&ntilde;os"> 8  am</option>
            <option value="10 am a&ntilde;os">10 am </option>
            <option value="12 pm a&ntilde;os">12 pm </option>
            <option value="2 pm a&ntilde;os">2  pm </option>
            <option value="4 pm ">4 pm ;</option>
          
        </label></td>
      </tr>
      <tr>
        <<td>hora salida</td>
        <td><label>
          <select name="hora_salida" id="hora_salida"  value="{{$horarios->hora_salida}}">
            <option value="select:" selected="selected">select:</option>
            <option value="10 am a&ntilde;os"> 10  am</option>
            <option value="12 am a&ntilde;os">12 am </option>
            <option value="2 pm a&ntilde;os">2 pm </option>
            <option value="4 pm a&ntilde;os">4  pm </option>
            <option value="6 pm ">6 pm ;</option>
             </label></td>
      </tr>
      <tr>
      
        <td colspan="2"> <label>
        <div align="center">
          <input type="submit" name="Submit" value="consultar horarios" />
        </div>
        </label></td>
      </tr>
    </table>
  </div>
</form>
</body>
</html>

@endsection