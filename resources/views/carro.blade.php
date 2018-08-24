@extends('layouts.web')
@section('content')


<div class="caja-header-carro ">
  <img class="img-header img-carro" src="/img/carro/header.png" alt="">
  <p class="titulo-carro " >Carro de compras</p>
</div>

<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-10 col-md-offset-1 ">
            <table class="table">
                <thead>
                    <tr>
                        <th>PRODUCTO</th>
                        <th>PRECIO</th>
                        <th class="text-center">CANTIDAD</th>
                        <th class="text-center">TOTAL</th>

                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td class="col-sm-8 col-md-6">
                        <div class="media">
                            <a class=" pull-left" href="#"> <img class="media-object" src="/productos/0D4WIxN0o0RZcWoPnowGccprGrxrTUOCM1KqZtui.jpeg" style="width: 102px; height: 102px;"> </a>
                            <div  class="media-body">
                                <p  class="texto-pro">Ramo Amanecer</p>
                                <p>
                                  <a class="texto-pro" href="#">Eliminar</a></p>
                            </div>
                        </div>
                      </td>
                        <td class="col-sm-1 col-md-1 text-center"><strong>$4.87</strong></td>
                        <td class="col-sm-1 col-md-1" style="text-align: center">
                        <input type="number" class="form-control" value="3">
                        </td>
                        <td class="col-sm-1 col-md-1 text-center"><strong>$14.61</strong></td>
                    </tr>
                    <tr>
                        <td class="col-sm-8 col-md-6">
                        <div class="media">
                            <a class=" pull-left" href="#"> <img class="media-object" src="/productos/0D4WIxN0o0RZcWoPnowGccprGrxrTUOCM1KqZtui.jpeg" style="width: 102px; height: 102px;"> </a>
                            <div  class="media-body">
                                <p  class="texto-pro">Ramo Amanecer</p>
                                <p>
                                  <a class="texto-pro" href="#">Eliminar</a></p>
                            </div>
                        </div>
                      </td>
                        <td class="col-sm-1 col-md-1 text-center"><strong>$4.87</strong></td>
                        <td class="col-sm-1 col-md-1" style="text-align: center">
                        <input type="number" class="form-control" value="3">
                        </td>
                        <td class="col-sm-1 col-md-1 text-center"><strong>$14.61</strong></td>
                    </tr>
                    <tr>
                        <td class="col-sm-8 col-md-6">
                        <div class="media">
                            <a class=" pull-left" href="#"> <img class="media-object" src="/productos/0D4WIxN0o0RZcWoPnowGccprGrxrTUOCM1KqZtui.jpeg" style="width: 102px; height: 102px;"> </a>
                            <div  class="media-body">
                                <p  class="texto-pro">Ramo Amanecer</p>
                                <p>
                                  <a class="texto-pro" href="#">Eliminar</a></p>
                            </div>
                        </div>
                      </td>
                        <td class="col-sm-1 col-md-1 text-center"><strong>$4.87</strong></td>
                        <td class="col-sm-1 col-md-1" style="text-align: center">
                        <input type="number" class="form-control" value="3">
                        </td>
                        <td class="col-sm-1 col-md-1 text-center"><strong>$14.61</strong></td>
                    </tr>

                </tbody>
            </table>

            <div class="col-md-10">
              <h1 class="subtotal">Subtotal</h1>

            </div>
            <div class="col-md-2">
              <h1 class="sub-precio">$12.00</h1>

            </div>


        </div>
    </div>
</div>


<div class="container">
<div class="formulario row ">
  <div class="col-sm-12 col-md-10 col-md-offset-1 ">
    <div class=" caja-textarea col-md-6">
      <p>MENSAJE EN TARJETA</p>
      <textarea name="name" rows="8" cols="60"></textarea>
      <hr>
      <p>INSTRUCCIONES ADICIONALES PARA ENTREGA</p>
      <textarea name="name" rows="8" cols="60"></textarea>
    </div>


  <div class=" tienda  col-md-6 text-center">
    <img src="img/tienda/tienda.png" alt="">
    <img src="img/tienda/domicilio.png" alt="">
  </div>

  <div class="">
    <div class="  col-md-6 text-center">
      <div class="caja-inputs">
        <div class="fecha">
          <p>FECHA</p>
        </div>
        <div class="fecha">
          <input type="date" class="form-control " placeholder="">
        </div>
        <div class="hora">
          <p>HORA</p>
        </div>
        <div class="hora">
          <input type="time" class="form-control " placeholder="">
        </div>
      </div>


    </div>
    <div class="form-group">
     <button class="btn-check" type="button" name="button">CHECK OUT</button>
    </div>

  </div>
  </div>


</div>
</div>

@include('layouts.footer')

@endsection
@section('scripts')
{{ Html::script('js/producto.js') }}
@endsection
