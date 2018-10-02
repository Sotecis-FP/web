<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Flores del Prado </title>
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimun-scale=1.0">﻿
  <meta content="" name="keywords">
  <meta content="" name="description">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet">



  <!-- Bootstrap CSS File -->
  {{ Html::style('admin/css/bootstrap.min.css') }}
  <!-- Libraries CSS Files -->
  <!-- Libraries CSS Files -->
  {{ Html::style('flores/lib/font-awesome/css/font-awesome.min.css') }}
  {{ Html::style('flores/lib/animate/animate.min.css') }}

  <!-- Main Stylesheet File -->
    {{ Html::style('css/style.css') }}
    {{ Html::style('css/prado.css') }}
    {{ Html::style('css/carro.css') }}
    {{ Html::style('css/pagos.css') }}
    {{ Html::style('css/ventana.css') }}
    {{ Html::style('css/tienda.css') }}
    {{ Html::script('https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js') }}


{{ Html::style('slick/slick.css') }}
{{ Html::style('slick/slick-theme.css') }}

{{ Html::script('https://unpkg.com/sweetalert2@7.18.0/dist/sweetalert2.all.js') }}








    @yield('style')

</head>

<body>

<header id="header">
  <div class="container">
      <div id="logo" class="pull-left">
        <a href="#"><img class="logo" src="/img/logo.png" alt="" title="" /></img></a>
        <!-- Uncomment below if you prefer to use a text logo -->
        <!--<h1><a href="#hero">Regna</a></h1>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active" ><a href="/">INICIO</a></li>
          <li class="menu-active"><a href="{{url('tienda')}}">TIENDA</a></li>
          <li class="menu-active"><a href="/#contacto">CONTACTO</a></li>
          <li  class="menu-active">
            <a href="{{url('cart/show')}}">
              @if(Session::get('cart'))
              <i class="fa fa-shopping-cart fa-3x"><span class="badge">{{count(Session::get('cart'))}}</span></i>
              @else
              <i class="fa fa-shopping-cart fa-3x"><span class="badge">0</span></i>
              @endif
          </a>

        </li>
        </ul>
      </nav><!-- #nav-menu-container -->
   </div>
</header><!-- #header -->


  @yield('content')
<!-- JavaScript Libraries -->
{{ Html::script('flores/lib/jquery/jquery.min.js') }}
{{ Html::script('flores/lib/wow/wow.min.js') }}
{{ Html::script('js/ajax.js') }}
{{ Html::script('flores/js/main.js') }}
{{ Html::script('flores/lib/superfish/superfish.min.js') }}
{{ Html::script('js/vue.js') }}
{{ Html::script('js/axios.js') }}
{{ Html::script('js/vue-router.js') }}

@yield('scripts')
<!-- Template Main Javascript File -->



</body>
</html>
