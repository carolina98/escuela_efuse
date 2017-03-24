@extends ('layout.master')
@section('content')
<body>
<head ><meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">  


<link href="{{asset('css/bootstrap.min.css')}}"" rel="stylesheet">
<div class="container">

    <form class="well form-horizontal" action=" " method="post"  id="diseño" name="diseño">
<fieldset>

<!-- Form Name -->


<form class="form-horizontal" id="form1" name="form1" method="post" action="{{url('alumnos')}}">
{!!csrf_field()!!}

  <div class="form-group" align="center">
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
  <input name="apellido" placeholder="Apellido" class="form-control"  type="text">
    </div>
  </div>
</div>
      </div>
      <div class="form-group">
  <label class="col-md-4 control-label" >Acudiente</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="acudiente" placeholder="Acudiente" class="form-control"  type="text" required="">
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
  <label class="col-md-4 control-label">Fecha de nacimiento</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
  <input name="fecha_nacimiento" type="date" id="fecha_nacimiento" class="form-control" />
    </div>
  </div>
</div>
      <div class="form-group">
  <label class="col-md-4 control-label">Genero</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
   <select name="state" class="form-control selectpicker" >
      <option value=" " >seleccione su genero</option>
      <option>Masculino</option>
      <option>Femenino</option>
      <option >Otros</option>
        </select>
  </div>
</div>
</div>
     </div>
      <div class="form-group">
  <label class="col-md-4 control-label">Edad</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
   <select name="state" class="form-control selectpicker" >
      <option value=" " >seleccione su edad</option>
      <option>5 Años</option>
      <option>6 Años</option>
      <option >7 Años</option>
      <option >8 Años</option>
      <option >9 Años</option>
      <option >10 Años</option>
      <option >11 Años</option>
      <option >12 Años</option>
      <option >13 Años</option>
      <option >14 Años</option>
      <option >15 Años</option>
      <option >16 Años</option>
      <option >17 Años</option>
      <option >18 Años</option>
        </select>
  </div>
</div>
</div>
      <div class="form-group">
  <label class="col-md-4 control-label">Direccion</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
  <input name="direccion" placeholder="Direccion" class="form-control" type="text">
    </div>
  </div>
</div>
     <div class="form-group">
  <label class="col-md-4 control-label">Eps</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input  name="eps" placeholder="Eps" class="form-control"  type="text">
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