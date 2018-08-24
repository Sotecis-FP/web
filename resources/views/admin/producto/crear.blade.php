@extends('layouts.admin')
@section('content')
<div class="">
<div class="page-title">
<div class="title_left">
<h3>SUBIR PRODUCTO</h3>
</div>
</div>
<div class="clearfix"></div>
<div class="row">
<div class="col-md-6 col-xs-12">
<div class="x_panel">
<div class="x_title">
<h2>F.Prado</h2>
<small>
<a href="{{url('ver_productos')}}">
<button type="button" style="width:30%; margin-left:30px;"  class="btn btn-default" name="button">VER PRODUCTOS</button>
</a></small>
<ul class="nav navbar-right panel_toolbox">
<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
</li>
<li><a class="close-link"><i class="fa fa-close"></i></a>
</li>
</ul>
<div class="clearfix"></div>
</div>
<div class="x_content">
<!-- start form for validation -->
<form id="demo-form" method="post" action="{{url('producto-crear')}}" enctype="multipart/form-data" >
{{ csrf_field() }}
<label for="fullname">Codigo:</label>
<input type="text"  class="form-control" name="codigo" required />
<br>
<label for="fullname">Nombre:</label>
<input type="text" id="nombre" class="form-control" name="nombre" required />
<br>
<label for="email">Precio:</label>
<input type="number" id="precio" class="form-control" name="precio" data-parsley-trigger="change" required />
<br>
<label for="email">Cantidad:</label>
<input type="number" min="0" class="form-control " name="cantidad"  />
<br>
<div class="form-group">
<label class="control-label">Categoria</label>
<div class="">
<select name="categoria" class="form-control" id="select-categoria" >
<option>Seleccione...</option>
@foreach($categorias as $categoria)
<option value="{{$categoria->id}}" >{{$categoria->nombre}}</option>
@endforeach
</select>
</div>
</div>
<div class="form-group">
<label class="control-label">Sub categoria</label>
<div class="">
<select name="subcategoria" class="form-control" id="select-subcategoria">
</select>
</div>
</div>
<br>
<br>
<label for="message">Descripcion:</label>
<textarea id="descripcion" required="required" class="form-control" name="descripcion" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.." data-parsley-validation-threshold="10"></textarea>
<br>

<br>
<br>
<br>
<div class="">
<label for="">Imagen Principal</label>
<input type="file" id="files" value="" name="imagen" multiple="true">
<span>Tamaño de imagen 1212 × 807 px</span><br>
</div>
<br>
<div class="">
<label for="">Imagen</label>
<input type="file" id="files" value="" name="imagenes[]" multiple="true">
<span>Tamaño de imagen 1212 × 807 px</span><br>
</div>
<br>
<div class="">
<label for="">Imagen</label>
<input type="file" id="files" value="" name="imagenes[]" multiple="true">
<span>Tamaño de imagen 1212 × 807 px</span><br>
</div>
<br>
<!-- <div class="">
<div class="container">
<div class="row clearfix">
<div class="col-md-12 table-responsive">
<label for="message">Especificacion:</label>
<table class="table table-bordered table-hover table-sortable" id="tab_logic">
<thead>
<tr >
<th class="text-center">
Nombre
</th>
<th class="text-center">
Descripcion
</th>
<th class="text-center" style="border-top: 1px solid #ffffff; border-right: 1px solid #ffffff;">
</th>
</tr>
</thead>
<tbody>
<tr id='addr0' data-id="0" class="hidden">
<td data-name="name">
<input type="text" name='name0'  placeholder='Nombre' class="form-control"/>
</td>
<td data-name="mail">
<input type="text" name='mail0' placeholder='Descripcion' class="form-control"/>
</td>

<td data-name="del">
<button nam"del0" class='btn btn-danger glyphicon glyphicon-remove row-remove'></button>
</td>
</tr>
</tbody>
</table>
</div>
</div>
<a id="add_row" class="btn btn-default pull-right">Agregar</a>
</div>


</div> -->

<input class="btn btn-primary" type="submit" name="" value="Subir Producto">

</form>
<!-- end form for validations -->
</div>
</div>
</div> <!--formulario -->



<div class="col-md-6 col-sm-6 col-xs-6">

<div class="x_panel">
<div class="x_title">
<h2>Detalle del Producto <small></small></h2>
<ul class="nav navbar-right panel_toolbox">
<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
</li>

<li><a class="close-link"><i class="fa fa-close"></i></a>
</li>
</ul>
<div class="clearfix"></div>
</div>

<div class="x_content">

<div class="col-md-7 col-sm-7 col-xs-12">
<div id="img2" style="width:400px" >
<img class="product-image" id="img1" width="70%" src="" />

</div>

</div>

<div class="col-md-5 col-sm-5 col-xs-12" style="border:0px solid #e5e5e5;">

<h3 class="prod_title"> <div id="salida_nombre" class="">

</div>  </h3>

<p> <div id="salida_descripcion" class="caja-descripcion">

</div>
</p>

<br />


<br />

<br />

<div class="">
<div class="product_price">
<h1  id="salida_precio" class="price"></h1>
<div id="salida_oferta" class="">

</div>

<br>
</div>
</div>




</div>



</div>
</div>
</div>




<!-- <div class="col-md-6 col-sm-6 col-xs-6">
<div class="x_panel">
<div class="x_title">
<h2>Imagenes</h2>
<div class="clearfix"></div>
</div>
<div class="x_content">
<br/>
<div class="">
<label for="">Imagen Principal</label>
<input type="file" id="files" value="" name="files[]" multiple="true">
<span>Tamaño de imagen 500x450 px</span>

</div>
<br/>
<div class="">
<label for="">Otra Imagen</label>
<input type="file" id="iotra1" name="" value="">

</div>
<br/>
<div class="">
<label for="">Otra Imagen</label>
<input type="file" name="" value="">

</div>
<br/>
<div class="">
<label for="">Otra Imagen</label>
<input type="file" name="" value="">

</div>


</div>
</div>
</div> -->


</div>

@endsection
@section('scripts')
<script type="text/javascript" src="js/producto.js" ></script>
@endsection
