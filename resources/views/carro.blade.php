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
                  @foreach($carts as $cart)
                    <tr>
                        <td class="col-sm-8 col-md-6">
                        <div class="media">
                            <a class=" pull-left" href="#"> <img class="media-object" src="/{{$cart->imagen}}" style="width: 102px; height: 102px;"> </a>
                            <div  class="media-body">
                                <p  class="texto-pro">{{$cart->nombre}}</p>
                                <p>
                                  <a class="texto-pro" href="{{url('cart/delete',$cart->id)}}">Eliminar</a></p>
                            </div>
                        </div>
                      </td>
                        <td class="col-sm-1 col-md-1 text-center"><strong>${{$cart->precio}}</strong></td>
                        <td class="col-sm-1 col-md-1 text-center"><strong>{{$cart->cantidad}}</strong></td>
                        <!-- <td class="col-sm-1 col-md-1" style="text-align: center">
                        <input type="number" class="form-control" value="{{$cart->cantidad}}">
                        </td> -->
                        <td class="col-sm-1 col-md-1 text-center"><strong>${{$cart->precio * $cart->cantidad }}</strong></td>
                    </tr>
                    @endforeach


                </tbody>
            </table>

            <div class="col-md-10 col-xs-6">
              <h1 class="subtotal">Subtotal</h1>
            </div>
            <div class="col-md-2 col-xs-6">
              <h1 class="sub-precio">${{$total}}</h1>

            </div>


        </div>
    </div>
</div>

<form id="myForm" class="" action="{{url('detalle_compra')}}" method="post">

{!!csrf_field()!!}
<div class="container">
<div class="formulario row ">
  <div class="col-sm-12 col-md-10 col-md-offset-1 ">
    <div class=" caja-textarea2 col-md-6">
      <p>MENSAJE EN TARJETA</p>
      <textarea  name="mensaje" rows="8" cols="60"></textarea>
      <hr>
      <p>INSTRUCCIONES ADICIONALES PARA ENTREGA</p>
      <textarea name="instrucciones" rows="8" cols="60"></textarea>
    </div>


  <div class=" tienda  col-md-6 text-center">
    <img src="img/tienda/tienda.png" alt="">
    <img src="img/tienda/domicilio.png" alt="">
  </div>

  <div class="col-md-6">
    <div class="row">
      <div class="caja-radios col-md-12 col-xs-6">
        <input type="radio" name="accion" value="tienda"/>
        <label for="huey">RECOGER EN LA TIENDA</label>
      </div>
      <div class="caja-radios col-md-12 col-xs-6" >
        <input type="radio" name="accion" value="envio" />
        <label for="huey">ENVIO A DOMICILIO</label>
      </div>

    </div>


  </form>


  <div class="form-group">
   <button class="btn-continuar"  type="submit" >CONTINUAR</button>
  </div>
  </div>


  @include('componentes.datos')
  @include('componentes.datos2')


  <!-- <div class="">
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

  </div> -->



  </div>


</div>
</div>

@include('layouts.footer')

@endsection
@section('scripts')
{{ Html::script('js/producto.js') }}
@endsection
