@extends('layouts.web')
@section('content')


<div class="caja-slider">
  <img class="img-header" src="/img/tienda/fondo_marmol.jpg" alt="">
</div>

<div class=" caja-categorias row">

  <div class="col-md-4 col-sm-4 col-xs-4 caja-cat">
    <a href="{{url('opcion',1)}}">
    <img class="img-categorias" src="/img/tienda/naturales.jpg" alt="">
    </a>
    <div class="caja-text-categoria">
        <p class="text-categoria">ARREGLOS NATURALES</p>
    </div>

  </div>
  <div class="col-md-4 col-sm-4 col-xs-4">
    <a href="{{url('opcion',2)}}">
    <img class="img-categorias" src="/img/tienda/artificiales.jpg" alt="">
    </a>
    <div class="caja-text-categoria">
        <p class="text-categoria">ARREGLOS ARTIFICIALES</p>
    </div>
  </div>
  <div class="col-md-4 col-sm-4 col-xs-4">
    <a href="{{url('opcion',3)}}">
    <img class="img-categorias"src="/img/tienda/novias.jpg" alt="">
    </a>
    <div class="caja-text-categoria novias">
        <p class="text-categoria novias-text">NOVIAS</p>
    </div>
  </div>
</div>
 <div class="caja-productos row">
  @if(isset($categoria->nombre))
  <h2 class="titulo-productos" >{{$categoria->nombre}}</h2>
  @else
  <h2 class="titulo-productos" >ARREGLOS NATURALES</h2>
@endif
  <div class="menu col-md-3">
     <ul>
       @foreach($subcategorias as $subcategoria)
       <li style="cursor:pointer;" class="titulo-subcategoria" value="{{$subcategoria->id}}">{{$subcategoria->nombre}}</li>
       @endforeach
     </ul>
  </div>

  <div class="col-md-9 row " id="productos">
    @foreach($productos as $producto)
    <a href="{{url('detalle',$producto->id)}}">
    <div class="col-md-4 col-xs-6 " id="general" >
    <img class="img-productos" src="/{{$producto->imagen}}" alt="">
    <div class="caja-text-producto">
    <p class="text-categoria text-categoria2 ">{{$producto->nombre}}</p>
    </div>
    </div>
    </a>
  @endforeach
  </div>

</div>

@include('layouts.footer')

@endsection
@section('scripts')
{{ Html::script('js/producto.js') }}
@endsection
