@extends('layouts.web')

@section('content')

<div class="caja-slider">
  <img class="img-slider" src="img/slider.jpg" alt="">
  <h1>FLORES EXCLUSIVAS</h1>
  <p>DETALLES ÚNICOS</p>
  <button type="button" class="btn btn-default" name="button">REGALA FLORES</button>
</div>

@include('componentes.index.seccion1')
@include('componentes.index.seccion2')
@include('componentes.index.seccion3')

@include('layouts.footer')

@endsection
