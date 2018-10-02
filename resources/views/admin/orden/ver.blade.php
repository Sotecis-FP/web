@extends('layouts.admin')
@section('content')
<!-- page content -->

<div class="page-title">
<div class="title_left">
<h3>DETALLE DE LA ORDEN</h3>

</div>

</div>
<div class="clearfix"></div>

<div class="row">
<div class="col-md-12">
<div class="x_panel">
<div class="x_title">
<h2> FLP</h2>
<a href="{{route('orden.editar',$orden->id)}}">
<button type="button" style="margin-left:10%;" class="btn btn-danger" name="button">EDITAR</button>
</a>
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

<form class="" action="{{url('crear_donacion')}}" method="post">
  {!!csrf_field()!!}
  <div class="col-md-6 form-group">
    <label for="">REFERENCIA</label>
    <input type="text" class="form-control" disabled   value="{{$orden->referencia}}" >
  </div>
  <div class="col-md-6 form-group">
    <label for="">MODO DE ENTREGA</label>
    <input type="text" class="form-control" disabled id="" name="apellido" placeholder="" value="{{$orden->accion}}">
  </div>
  <div class="col-md-6 form-group">
    <label for="">NOMBRE CLIENTE</label>
    <input type="text" class="form-control" disabled id="" name="correo" placeholder="" value="{{$orden->nombre_cliente}}">

  </div>
  <div class="col-md-6 form-group">
    <label for="">CORREO</label>
      <input type="text"  class="form-control" disabled id="" name="valor" value="{{$orden->correo_cliente}}">
  </div>
  <div class="col-md-6 form-group">
    <label for="">TELEFONO</label>
    <input type="text" class="form-control" disabled value="{{$orden->telefono_cliente}}">
  </div>
  <div class="col-md-6 form-group">
    <label for="">PRECIO</label>
    <input type="TEXT" class="form-control" disabled value="${{ number_format($orden->total)}}">
  </div>

  <div class="col-md-6 form-group">
    <label for="">DIRECCIÓN</label>
    <input type="text" class="form-control" disabled value="{{$orden->direccion}}">
  </div>
  <div class="col-md-6 form-group">
    <label for="">BARRIO</label>
    <input type="text" class="form-control" disabled value="{{$orden->barrio}}">
  </div>
  <div class="col-md-6 form-group">
    <label for="">RECIBE</label>
    <input type="text" class="form-control" disabled value="{{$orden->recibe}}">
  </div>
  <div class="col-md-6 form-group">
    <label for="">FECHA</label>
    <input type="text" class="form-control" disabled value="{{$orden->fecha}}">
  </div>
  <div class="col-md-6 form-group">
    <label for="">HORA</label>
    <input type="text" class="form-control" disabled value="{{$orden->hora}}">
  </div>

 <div class="col-md-6 form-group">
   <label for="">ESTADO</label>
   <select required class="form-control" disabled name="programa">
     <option value="{{$orden->estado}}">{{$orden->estado}}</option>
   </select>
 </div>
 <div class="col-md-6 form-group">
   <label for="">DE</label>
   <input type="text" class="form-control" disabled value="{{$orden->de}}">
 </div>
 <div class="col-md-6 form-group">
   <label for="">PARA</label>
   <input type="text" class="form-control" disabled value="{{$orden->para}}">
 </div>


 <div class="col-md-6 form-group">
   <label for="">MENSAJE EN TARJETA</label>
   <textarea name="observacion" class="form-control" disabled rows="5" cols="80">{{$orden->mensaje}}</textarea>
 </div>
 <div class="col-md-6 form-group">
   <label for="">INSTRUCCIONES </label>
   <textarea name="observacion" class="form-control" disabled rows="5" cols="80">{{$orden->instruciones}}</textarea>
 </div>
 <!-- <div class="col-md-9 form-group">
   <input type="submit" class="btn btn-primary" name="" value="CREAR">
 </div> -->
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
