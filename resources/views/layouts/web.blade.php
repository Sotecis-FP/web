
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Bienvenidos  a Flores del prado </title>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta content="Flores del prado,arreglos florares,arreglos naturales,arreglos artificiales" name="keywords">
  <meta content="" name="description">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <!-- Favicons -->
  <!-- <link href="img/favicon.png" rel="icon"> -->
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet">
  {{ Html::script('plugin/snowstorm.js') }}

  <script>snowStorm.excludeMobile = false;</script>

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


{{ Html::style('css/swiper.min.css') }}
{{ Html::style('slick/slick.css') }}
{{ Html::style('slick/slick-theme.css') }}

{{ Html::script('https://unpkg.com/sweetalert2@7.18.0/dist/sweetalert2.all.js') }}

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-130511775-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-130511775-1');
</script>


<script>
    (function(d, w, c) {
        w.ChatraID = 'eMrE65JeF6N6gheSH';
        var s = d.createElement('script');
        w[c] = w[c] || function() {
            (w[c].q = w[c].q || []).push(arguments);
        };
        s.async = true;
        s.src = 'https://call.chatra.io/chatra.js';
        if (d.head) d.head.appendChild(s);
    })(document, window, 'Chatra');
</script>




    @yield('style')




</head>

<body>

<header id="header">
  <div class="container">
      <div id="logo" class="pull-left">
        <a href="/"><img class="logo" src="/img/logo-fp.png" alt="" title="" /></img></a>
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

  <div id="app" >

   @yield('content')

  </div>

<!-- JavaScript Libraries -->


{{ Html::script('flores/lib/jquery/jquery.min.js') }}


{{ Html::script('flores/lib/wow/wow.min.js') }}

{{ Html::script('flores/js/main.js') }}
{{ Html::script('flores/lib/superfish/superfish.min.js') }}


{{ Html::script('js/producto.js') }}
{{ Html::script('js/app.js') }}
{{ Html::script('js/swiper.min.js') }}
{{ Html::script('js/animations.js') }}
{{ Html::script('js/ajax.js') }}


<script>
 // snowStorm.snowColor = '#cccccc';   // ¡¿nieve azul ?!
snowStorm.flakesMaxActive = 96;    // muestra más nieve en la pantalla a la vez
snowStorm.useTwinkleEffect = true; // Deja que la nieve parpadee dentro y fuera de la vista
snowStorm.targetElement = 'snow-target';


</script>



<script type="text/javascript">

var swiper = new Swiper('.swiper-container', {
    loop:true,
     // autoplay:{
     //   delay:4000,
     // },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });
</script>




@yield('scripts')
<!-- Template Main Javascript File -->


</body>
</html>
