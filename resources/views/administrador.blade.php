@extends ('layout.administrador')
@section('content')
<body>
<head ><meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">  


<link href="{{asset('css/bootstrap.min.css')}}"" rel="stylesheet">
<div class="container">

    <form class="well form-horizontal" action=" " method="post"  id="diseño" name="diseño">
<fieldset>

<form id="form1" name="form1" method="post" action="{{url('administrador')}}">
{!!csrf_field()!!}
  <div align="center">
    <table width="409" border="0" bgcolor="ccccc">

      <div class="form-group">
  <label class="col-md-4 control-label">Nombre</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input  name="nombre" placeholder="Nombre" class="form-control"  type="text" required="">
    </div>
  </div>
</div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" >Apellido</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="apellido" placeholder="Apellido" class="form-control"  type="text" required="">
    </div>
  </div>
</div>
     </div>
<div class="form-group">
  <label class="col-md-4 control-label" >Identificacion</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="identificacion" placeholder="Identificacion" class="form-control"  type="text" required="">
    </div>
  </div>
</div>
</div>
    <div class="form-group">
  <label class="col-md-4 control-label">Telefono</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
  <input name="telefono" placeholder="Telefono" class="form-control" type="text"  required="">
    </div>
  </div>
</div>
</div>
   <div class="form-group">
  <label class="col-md-4 control-label">Direccion</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
  <input name="direccion" placeholder="Direccion" class="form-control" type="text" required="">
    </div>
  </div>
</div>

      <tr>
        <td colspan="2"> <div align="center"> <label>
        <input type="submit" name="Submit" value="Registrarse" />
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