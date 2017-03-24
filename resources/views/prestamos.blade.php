@extends ('layout.prestamos')
@section('content')
<body>
<head ><meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">  


<link href="{{asset('css/bootstrap.min.css')}}"" rel="stylesheet">
<div class="container">

    <form class="well form-horizontal" action=" " method="post"  id="diseño" name="diseño">
<fieldset>
<form id="form1" name="form1" method="post" action="{{url('prestamos')}}">
{!!csrf_field()!!}
  <div align="center">
    <table width="409" border="0" bgcolor="ccccc">
     <div class="form-group">
  <label class="col-md-4 control-label">Nombre del implemento</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-star"></i></span>
  <input  name="nombre" placeholder="Nombre del implemento" class="form-control"  type="text">
    </div>
  </div>
</div>
       <div class="form-group">
  <label class="col-md-4 control-label">Cantidad</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-star"></i></span>
  <input  name="csntidad" placeholder="Cantidad" class="form-control"  type="text">
    </div>
  </div>
</div>
       </div>
       <div class="form-group">
  <label class="col-md-4 control-label">Fecha de prestamo</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
  <input name="fecha_prestamo" type="date" id="Fecha de prestamo" class="form-control" />
    </div>
  </div>
</div>
       </div>
       <div class="form-group">
  <label class="col-md-4 control-label">Fecha de entrega</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
  <input name="fecha_entrega" type="date" id="fecha de entrega" class="form-control" />
    </div>
  </div>
</div>
   </div>
    <div class="form-group">
  <label class="col-md-4 control-label">Nombre del entrenador</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input  name="nombre_entrenador" placeholder="Nombre del entrenador" class="form-control"  type="text">
    </div>
  </div>
</div>
     </div>
     <div class="form-group" align="center">
    <table width="409" border="0" bgcolor="ccccc">
     <div class="form-group">
  <label class="col-md-4 control-label">Identificacion</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input  name="identificacion" placeholder="Identificacion" class="form-control"  type="text" required="">
    </div>
  </div>
</div>
        <td colspan="2"> <label>
        <div align="center">
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