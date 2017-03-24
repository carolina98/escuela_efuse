@extends ('layout.inventario')
@section('content')
<body>
<head ><meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">  


<link href="{{asset('css/bootstrap.min.css')}}"" rel="stylesheet">
<div class="container">

    <form class="well form-horizontal" action=" " method="post"  id="diseño" name="diseño">
<fieldset>

<form id="inventario" name="inventario" method="post" action="{{url('inventario')}}">
{!!csrf_field()!!}
  <div align="center">
    <table width="409" border="0" bgcolor="ccccc">
       <div align="center">
    <table width="409" border="0" bgcolor="ccccc">
     <div class="form-group">
  <label class="col-md-4 control-label">Nombre del implemento</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-star"></i></span>
  <input  name="nombre" placeholder="Nombre del implemento" class="form-control"  type="text" required="">
    </div>
  </div>
</div>
      <div class="form-group">
  <label class="col-md-4 control-label">Cantidad</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-star"></i></span>
  <input  name="cantidad" placeholder="Cantidad" class="form-control"  type="text" required="">
    </div>
  </div>
</div>
    <td colspan="2"> <label>
        <div align="center">
          <input type="submit" name="Submit" value="consultar inventario" />
        </div>
        </label></td>
      </tr>
    </table>
  </div>
  <div class="alert alert-success" role="alert" id="success_message"><i class="glyphicon glyphicon-thumbs-up"></i> Gracias por visitar nuestra pagina.</div>
</form>
</form>
</body>
</html>

@endsection