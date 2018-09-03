@extends('layouts.admin')
@section('content')
<!-- page content -->

<div class="page-title">
<div class="title_left">
<h3>EDITAR ORDEN</h3>
</div>

</div>
<div class="clearfix"></div>

<div class="row">
<div class="col-md-12">
<div class="x_panel">
<div class="x_title">
<h2> FLP</h2>
<ul class="nav navbar-right panel_toolbox">
<li><a href="#"><i class="fa fa-chevron-up"></i></a>
</li>
<li><a href="#"><i class="fa fa-close"></i></a>
</li>
</ul>
<div class="clearfix"></div>
</div>

<div class="x_content">
<div class="col-md-9 col-sm-9 col-xs-12">

<form class="" action="{{route('orden.actualizar',$orden->id)}}" method="post">
  {!!csrf_field()!!}
  <div class="col-md-6 form-group">
    <label for="">REFERENCIA</label>
    <input type="text" class="form-control" disabled value="{{$orden->referencia}}" >
  </div>
  <div class="col-md-6 form-group">
    <label for="">MODO DE ENTREGA</label>
    <select required class="form-control" name="accion">
      <option value="{{$orden->accion}}">{{$orden->accion}}</option>
      <option value="Tienda">Tienda</option>
      <option value="Envio">Envio</option>

    </select>
  </div>
  <div class="col-md-6 form-group">
    <label for="">NOMBRE CLIENTE</label>
    <input type="text" class="form-control"  id="" name="nombre_cliente" placeholder="" value="{{$orden->nombre_cliente}}">

  </div>
  <div class="col-md-6 form-group">
    <label for="">CORREO</label>
      <input type="text"  class="form-control" id="" name="correo_cliente" value="{{$orden->correo_cliente}}">
  </div>
  <div class="col-md-6 form-group">
    <label for="">TELEFONO</label>
    <input type="text" class="form-control" name="telefono_cliente" value="{{$orden->telefono_cliente}}">
  </div>
  <div class="col-md-6 form-group">
    <label for="">PRECIO</label>
    <input type="text" class="form-control" name="total" value="{{$orden->total}}">
  </div>

  <div class="col-md-6 form-group">
    <label for="">DIRECCIÓN</label>
    <input type="text" class="form-control" name="direccion" value="{{$orden->direccion}}">
  </div>
  <div class="col-md-6 form-group">
    <label for="">BARRIO</label>
    <input type="text" class="form-control" name="barrio" value="{{$orden->barrio}}">
  </div>
  <div class="col-md-6 form-group">
    <label for="">RECIBE</label>
    <input type="text" class="form-control" name="recibe"  value="{{$orden->recibe}}">
  </div>
  <div class="col-md-6 form-group">
    <label for="">FECHA</label>
    <input type="date" class="form-control" name="fecha" value="{{$orden->fecha}}">
  </div>
  <div class="col-md-6 form-group">
    <label for="">HORA</label>
    <input type="time" class="form-control" name="hora" value="{{$orden->hora}}">
  </div>

 <div class="col-md-6 form-group">
   <label for="">ESTADO</label>
   <select required class="form-control" name="estado">
     <option value="{{$orden->estado}}">{{$orden->estado}}</option>
     <option value="Pendiente">Pendiente</option>
     <option value="Aprobada">Aprobada</option>
     <option value="Anulada">Anulada</option>
   </select>
 </div>


 <div class="col-md-6 form-group">
   <label for="">MENSAJE EN TARJETA</label>
   <textarea name="mensaje" class="form-control" rows="5" cols="80">{{$orden->mensaje}}</textarea>
 </div>
 <div class="col-md-6 form-group">
   <label for="">INSTRUCCIONES </label>
   <textarea name="instruciones" class="form-control" rows="5" cols="80">{{$orden->instruciones}}</textarea>
 </div>
  <div class="col-md-9 form-group">
   <input type="submit" class="btn btn-primary" name="" value="ACTUALIZAR">
 </div>
</form>

<br/>

<div id="mainb" style="height:150px;"></div>

</div>

<!-- start project-detail sidebar -->
<div class="col-md-3 col-sm-3 col-xs-12">

<section class="panel">

<div class="x_title">
<h2>Información</h2>
<div class="clearfix"></div>
</div>
<div class="panel-body">
<h3 class="green"><i class="fa fa-book"></i></h3>

<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
   sed do eiusmod tempor incididunt ut labore et dolore magna
   aliqua. Ut enim ad minim veniam, quis nostrud exercitation
    ullamco laboris nisi ut aliquip ex ea commodo consequat.
    Duis aute irure dolor in reprehenderit in voluptate velit
     esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
      occaecat cupidatat non proident, sunt in culpa qui officia
      deserunt mollit anim id est laborum.</p>
<br />

<br />

<br/>

</div>

</section>

</div>
<!-- end project-detail sidebar -->

</div>
</div>
</div>


</div>
<!-- /page content -->
@endsection
