@extends ('layout.horarios')
@section('content')
<body>
<head ><meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">  


<link href="{{asset('css/bootstrap.min.css')}}"" rel="stylesheet">
<div class="container">

    <form class="well form-horizontal" action=" " method="post"  id="diseño" name="diseño">
<fieldset>

<form id="form1" name="form1" method="post" action="{{url('horarios')}}">
{!!csrf_field()!!}
  <div align="center">
    <table width="409" border="0" bgcolor="ccccc">
          <div class="form-group">
  <label class="col-md-4 control-label">Categoria</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
   <select name="state" class="form-control selectpicker" >
      <option value=" " >seleccione su categoria</option>
      <option>6-7 Años</option>
      <option>8-9 Años</option>
      <option >10-11 Años</option>
      <option >12-13 Años</option>
      <option >14-15 Años</option>
      <option >16-18 Años</option>
        </select>
  </div>
</div>
</div>
          <div class="form-group">
  <label class="col-md-4 control-label">Hora de llegada</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
   <select name="state" class="form-control selectpicker" >
      <option value=" " >seleccione su hora de llegada</option>
      <option>10 Am</option>
      <option>12 Pm</option>
      <option >2 Pm</option>
       <option >4 Pm</option>
        </select>
  </div>
</div>
</div>
       <div class="form-group">
  <label class="col-md-4 control-label">Hora de salida</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
   <select name="state" class="form-control selectpicker" >
      <option value=" " >seleccione su hora de salida</option>
      <option>12 Am</option>
      <option>2 Pm</option>
      <option >4 Pm</option>
       <option >6 Pm</option>
        </select>
  </div>
</div>
</div>
      <tr>
      
        <td colspan="2"> <label>
        <div align="center">
          <input type="submit" name="Submit" value="consultar horarios" />
        </div>
        </label></td>
      </tr>
    </table>
  </div>
  <div class="alert alert-success" role="alert" id="success_message"><i class="glyphicon glyphicon-thumbs-up"></i> Gracias por visitar nuestra pagina.</div>
</form>
</body>
</html>

@endsection