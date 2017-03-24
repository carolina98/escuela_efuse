
<body>
<div align="center">
<form method="POST" action="/auth/register">

    {!! csrf_field() !!}

<head ><meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">  
 <link href="{{asset('css/bootstrap.min.css')}}"" rel="stylesheet">

<table width="500" border="1" bgcolor="ccccc">

<div class="form-group">
  <label class="col-md-4 control-label" >Nombre</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="nombre" placeholder="Nombre" class="form-control"  type="text" required="">
    </div>
  </div>
</div>
</td>
</tr>
<tr>

<div class="form-group">
  <label class="col-md-4 control-label" >Email</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="email" placeholder="Email" class="form-control"  type="text" required="">
    </div>
  </div>
</div>
</td>
      </tr>
      <tr>
  
  <div class="form-group">
  <label class="col-md-4 control-label">Contraseña</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input  name="ontraseña" placeholder="Contraseña" class="form-control"  type="text" required="">
    </div>
  </div>
</div></td>
      </tr>
      <tr>

<div class="form-group">
  <label class="col-md-4 control-label">Confirmar contraseña</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input  name="confirmar contraseña" placeholder="Confirmar contraseña" class="form-control"  type="text" required="">
    </div>
  </div>
</div>
</td>
      </tr>
      <tr>

      <tr>
        <td colspan="2"> <div align="center"> <label>
        <input type="submit" name="Submit" value="Registrarse" />
        </div>
        </label></td>
</tr>
    </table>    

    </div>

</form>
</body>
</html>
