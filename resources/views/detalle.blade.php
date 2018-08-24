@extends('layouts.web')

@section('content')
@include('sweetalert::alert')

<div class="caja-slider">

  <div class="detalle">
    <div>
      <img class="img-detalle" src="/{{$producto->imagen}}" alt="">
    </div>
    @foreach($imagenes as $imagen)
    <div>
      <img class="img-detalle" src="/{{$imagen->url}}" alt="">
    </div>
    @endforeach
</div>
<p class="nombre-producto">{{$producto->nombre}}</p>
<p class="precio">${{$producto->precio}}</p>

</div>
<div class="row caja-cuerpo">
<div class="col-md-6 seccion-a">
  <div class="cantidad">
    Cantidad <input type="number" min="1" name="" value="1">
  </div>
<div class="agregar">
  <a href="{{url('gregar')}}">
 <button type="button" name="button">AGREGAR AL CARRO</button>
 </a>
</div>

</div>

<div class="col-md-6 seccion-b">
<p>{{$producto->descripcion}}</p>
</div>

</div>





@include('layouts.footer')

@endsection
@section('scripts')
{{ Html::script('js/producto.js') }}
{{ Html::script('slick/slick.min.js') }}

<script type="text/javascript">
$('.detalle').slick({
  dots: true,
  infinite: true,
  speed: 500,
  fade: true,
  cssEase: 'linear',
  arrows: true,
  adaptiveHeight:true
});
</script>

@endsection
