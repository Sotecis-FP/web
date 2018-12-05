@extends('layouts.web')
@section('style')

    <style>

  .swiper-button-prev {
     background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20viewBox%3D'0%200%2027%2044'%3E%3Cpath%20d%3D'M0%2C22L22%2C0l2.1%2C2.1L4.2%2C22l19.9%2C19.9L22%2C44L0%2C22L0%2C22L0%2C22z'%20fill%3D'%23F5C89C'%2F%3E%3C%2Fsvg%3E") !important;
   }
  .swiper-button-next {
  background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20viewBox%3D'0%200%2027%2044'%3E%3Cpath%20d%3D'M27%2C22L27%2C22L5%2C44l-2.1-2.1L22.8%2C22L2.9%2C2.1L5%2C0L27%2C22L27%2C22z'%20fill%3D'%23F5C89C'%2F%3E%3C%2Fsvg%3E") !important;
   }
    .swiper-container {
      width: 100%;
      height: 100%;
    }
    .swiper-slide {
      text-align: center;
      font-size: 18px;
      background: #fff;
      /* Center slide text vertically */
      display: -webkit-box;
      display: -ms-flexbox;
      display: -webkit-flex;
      display: flex;
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      -webkit-justify-content: center;
      justify-content: center;
      -webkit-box-align: center;
      -ms-flex-align: center;
      -webkit-align-items: center;
      align-items: center;
    }
  </style>
@endsection
@section('content')
<div class="swiper-container" >
  <div class="swiper-wrapper">
    <div class="swiper-slide caja-slider" id="snow-target">
      <img class="img-slider" src="img/slider/banner_navidad.jpg" alt="">
      <h1>Se acerca la navidad</h1>
      <p>DECORA TU HOGAR</p>
      <!-- <span> &#10053;</span> -->
      <a href="/tienda">
        <button type="button" class="btn btn-default" name="button">REGALA FLORES </button>
      </a>
    </div>
    <div class="swiper-slide caja-slider">
      <img class="img-slider" src="img/slider/banner_rosas.jpg" alt="">
      <h1>Flores exclusivas</h1>
      <p>DETALLES ÚNICOS</p>
        <a href="/tienda">
      <button type="button" class="btn btn-default" name="button">REGALA FLORES</button>
       </a>
    </div>
    <div class="swiper-slide caja-slider">
      <img class="img-slider" src="img/slider/banner_mesa.jpg" alt="">
      <h1>Espectaculares flores</h1>
      <p>PARA TUS EVENTOS</p>
      <a href="/tienda">
      <button type="button" class="btn btn-default" name="button">REGALA FLORES</button>
      </a>
    </div>
  </div>
  <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
  <!-- Add Arrows -->
  <div  class="swiper-button-next"></div>
  <div class="swiper-button-prev"></div>
</div>
<!-- <div class="caja-slider">
  <img class="img-slider" src="img/slider.jpg" alt="">
  <h1>FLORES EXCLUSIVAS</h1>
  <p>DETALLES ÚNICOS</p>
  <button type="button" class="btn btn-default" name="button">REGALA FLORES</button>
</div> -->

<!-- Swiper -->
@include('componentes.index.seccion1')
@include('componentes.index.seccion2')
@include('componentes.index.seccion3')
@include('layouts.footer')
@endsection
