@extends('layouts.web')
@section('content')


<div class="caja-header-carro ">
<img class="img-header img-carro" src="/img/carro/header.png" alt="">
<p class="titulo-carro " >Detalle de la compra</p>
</div>
<div class="container">
<div class="row">
<div class="col-sm-12 col-md-10 col-md-offset-1 ">
  <div class="titulo-detalle col-sm-12">
  <p>DETALLES DEL CLIENTE</p>
</div>


<div class="col-md-6 detalle-cliente">
    <div class="col-md-4 col-sm-6 col-xs-6">
    <p class="text-sub">NOMBRE</p>
    <p class="text-sub">CORREO</p>
    <p class="text-sub">TELÉFONO</p>
    @if($request->accion =='envio')
      <p class="text-sub">DIRECCIÓN</p>
      <p class="text-sub">BARRIO</p>
      <p class="text-sub">RECIBE</p>
      <p class="text-sub">FECHA</p>
      <p class="text-sub">HORA</p>
    @endif
    </div>
    <div class="col-md-8 col-sm-6 col-xs-6">
    <p class="text-sub">{{$client['nombre']}}</p>
    <p class="text-sub">{{$client['correo']}}</p>
    <p class="text-sub">{{$client['telefono']}}</p>
    @if($request->accion =='envio')
    <p class="text-sub">{{$client['direccion']}}</p>
    <p class="text-sub">{{$client['barrio']}}</p>
    <p class="text-sub">{{$client['recibe']}}</p>
    <p class="text-sub">{{$client['fecha']}}</p>
    <p class="text-sub">{{$client['hora']}}</p>
    @endif
    </div>
</div>

<div class="col-md-6 col-xs-12 detalle-sub">

<div class="col-md-6 col-xs-6 ">
<p class="text-sub">SUBTOTAL</p>
@if($request->accion =='envio')
<p class="text-sub">COSTO DE ENVIO</p>
@endif
<p class="subtotal-m">Total</p>
</div>
<div class="col-md-6 col-xs-6">
<p class="text-sub">${{number_format($subtotal)}}</p>
@if($request->accion =='envio')
<p class="text-sub">$7,000</p>
<p class="text-sub">${{number_format($total)}}</p>
@else
<p class="text-sub">${{number_format($total)}}</p>
@endif
</div>
<div class="col-md-12 ">
  <hr>
  <p class="text-sub">MENSAJE EN LA TARJETA</p>
<p class="text-sub">{{$request->mensaje}}</p>
</div>
<div class="col-md-12">
  <p class="text-sub">INSTRUCCIONES ADICIONALES PARA ENTREGA</p>
<p class="text-sub">{{$request->instrucciones}}</p>
</div>
</div>
<div class="form-group col-sm-12 col-xs-12 text-right">
  @include('componentes.payuform')
 <!-- <button class="btn-continuar"  type="button" name="button">PAGAR</button> -->
</div>
</div>
</div>
</div>

@include('layouts.footer')

@endsection
@section('scripts')
{{ Html::script('js/producto.js') }}
@endsection
