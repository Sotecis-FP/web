@extends('layouts.web')

@section('content')
<div class="caja-slider">
  <img class="img-slider" src="img/slider.jpg" alt="">
</div>

<div class="seccion-1 row">
  <div class="col-md-6 caja-texto_1">
    <img class="logo2" src="img/logo2.png" alt="">

    <div class="parrafo">
      <p class="avenir" >MAS QUE UNA FLORISTERIA</p>
      <p class="contenido-1" >Duis in vestibulum erat. Ut consequat suscipit nisi
         sed accumsan. Quisque ornare sollicitudin metus vel
         tempus. Cras purus mi, sollicitudin eget bibendum vitae,
         pharetra ut quam. Sed enim turpis, porta vitae arcu nec,
         egestas ultrices mauris. Nulla eu accumsan diam. Duis
         dignissim consequat tellus, vel rhoncus erat aliquam non.
         Integer sit amet ex quis libero suscipit malesuada. Vivamus
         maximus nulla ut sem convallis, eu pharetra libero pellentesque.
         Donec facilisis a eros in facilisis.
      </p>

    </div>

  </div>
  <div class="col-md-6 caja-cuadro_1">
      <img class="img-cuadro_1" src="img/cuadro_1.jpg" alt="">
  </div>
</div>
<div class="seccion-2 row">
  <div class="col-md-4 caja-texto_1">
    <div class="caja-combina">
      <p class="combina">Combina</hp>
      <p class="sun-1">Hermosas flores</p>
      <p style="margin-top:-5%;" class=" combina" >
        con detalles exclusivos
      </p>

    </div>


  </div>
  <div class="col-md-8 caja-cuadro_2">
    <img class="img-cuadro_3" src="img/cuadro_3.jpg" alt="">
      <img class="img-cuadro_2" src="img/cuadro_2.jpg" alt="">

  </div>
</div>

<div class="seccion-3 row">
  <img  class="img-mancha" src="img/mancha_seccion_3.jpg"/>
      <p class="texto-titulo">Tus flores</p>
      <p class="texto-centro avenir">EN CUALQUIER PARTE DEL MUNDO!</p>
      <p class="texto-descripcion">Duis dignissim consequat tellus, vel rhoncus erat aliquam non. Integer sit amet ex quis libero suscipit malesuada. Vivamus maximus nulla u
        t sem convallis, eu pharetra libero pellentesque.
        Donec facilisis a eros in facilisis.
      </p>

      <img class="logo-ftd" src="img/logo_ftd.png" alt="">

</div>
<div class="seccion-4 row ">
  <div class="caja-texto-4">
    <p class="avenir" >FLORES NATURALES</p>
    <p class="y" >y</p>
    <p class="artificiales avenir">ARTIFICIALES</p>
    <img class="fondo-seccion-4" src="img/fondo_seccion_4.png" alt="">
    <img class="florero-1" src="img/florero_1.png" alt="">
    <img class="florero-2" src="img/florero_2.png" alt="">
    <a style="text-decoration:none;" href="/tienda" class="btn  btn-tienda">TIENDA</a>


    </button>
  </div>
</div>
<div class="seccion-5 row" id="contacto">
  <div class="caja-texto-4">
    <p class="contactanos" >CONTÁCTANOS</p>
    <p class="contc-descripcion" >Duis dignissim consequat tellus, vel rhoncus erat aliquam non.
       Integer sit amet ex quis libero suscipit malesuada. Vivamus maximus nulla ut sem
      convallis, eu pharetra libero pellentesque. Donec facilisis a eros in facilisis.
    </p>
  </div>
  <div class="form row">
    <form class="" action="index.html" method="post">
      <div class="caja-input col-md-6">
        <input type="text" name="" placeholder="Nombre"><br>
        <input type="text" name="" placeholder="E-mail"><br>
        <input type="text" name="" placeholder="Tel/Cel">
      </div>
      <div class="caja-textarea col-md-6">
        <textarea name="name" rows="8" cols="60"></textarea><br>
        <button type="button" class="btn btn-enviar" name="button ">Enviar</button>
      </div>

    </form>

  </div>
</div>


@include('layouts.footer')
@endsection
