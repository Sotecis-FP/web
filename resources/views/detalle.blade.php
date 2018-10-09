@extends('layouts.web')

@section('content')
@include('sweetalert::alert')

<div class="">

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
<p class="precio">${{number_format($producto->precio)}}</p>

</div>

<div class="row caja-cuerpo">
  <form class="" action="{{url('cart/add',$producto->id)}}" method="post">
    {!!csrf_field()!!}
<div class="col-md-6 col-sm-6 seccion-a">
  <div class="cantidad">
    Cantidad <input type="number" min="1" max="100" name="cantidad" value="1">
  </div>
<div class="agregar">
  <a href="">
 <button type="submit" name="button">AGREGAR AL CARRO</button>
 </a>
</div>

</div>

</form>
<div class="col-md-6 col-sm-6 seccion-b">
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
