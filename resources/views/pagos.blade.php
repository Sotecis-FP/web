@extends('layouts.web')
@section('content')


<div class="caja-header-carro ">
<img class="img-header img-carro" src="/img/carro/header.png" alt="">
<p class="titulo-carro " >Metodos de pago</p>
</div>
<div class="container">
<div class="row">
<div class="col-sm-12 col-md-10 col-md-offset-1 ">
  <div class="fecha">
  <p>METODO DE ENVIO</p>
</div><br>
  <hr>

<div class="col-md-6">
<div class="caja-radios" >
  <input type="radio" id="huey" name="metodo" />
  <label for="huey">RECOGER EN LA TIENDA</label>
</div>
<div class="caja-radios" >
  <input type="radio" id="huey" name="metodo" />
  <label for="huey">ENVIO A DOMICILIO</label>
</div>
<div class="form-group">
 <button class="btn-continuar" onclick="openVentana()" type="button" name="button">CONTINUAR</button>
</div>

</div>

<div class="col-md-4">
<p class="text-sub">SUBTOTAL</p>
<p class="text-sub">COSTO DE ENVIO</p>
<p class="subtotal-m">Total</p>

</div>
<div class="col-md-2">
<p class="text-sub">$175.000</p>
<p class="text-sub">$10.000</p>
<p class="text-sub">$185.000</p>

</div>


</div>
</div>
</div>


@include('componentes.datos')



@include('layouts.footer')

@endsection
@section('scripts')
{{ Html::script('js/producto.js') }}
@endsection
