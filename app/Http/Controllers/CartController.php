<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Producto;
use App\Orden;
use Redirect;


class CartController extends Controller
{
    public function __construct(){
      if (!\Session::has('cart')) \Session::put('cart',array());
      if (!\Session::has('client')) \Session::put('client');
      if (!\Session::has('datosOrden')) \Session::put('datosOrden');
    }


    public function show(){
      $carts = \Session::get('cart');

      $total = $this->total();
      return view('carro')->with('carts',$carts)
                          ->with('total',$total);
    }

    public function add(Producto $producto,Request $request){
      $cart = \Session::get('cart');
      $producto->cantidad =$request->cantidad;
      $cart[$producto->id] = $producto;
      \Session::put('cart',$cart);
      return redirect()->route('cart.show');
    }

    public function delete(Producto $producto){
      $cart = \Session::get('cart');
      unset($cart[$producto->id]);
      \Session::put('cart',$cart);
      return redirect()->route('cart.show');

    }

  private function total(){
    $cart = \Session::get('cart');
    $total = 0;
    foreach ($cart as $item) {
      $total +=$item->precio * $item->cantidad;
    }
    return $total;
  }


  public function detalleCompra(Request $request){
    $client = \Session::get('client');
    $cart = \Session::get('cart');

    foreach ($cart as $value) {
      $descriptions[] = $value['nombre'];
    }
    $description = implode(",", $descriptions);
    if ($request->accion == 'envio') {
      $total = $this->total()+7000;
      $subtotal = $this->total();
    }else {
      $subtotal = $this->total();
      $total = $this->total();
    }
    $referenceCode = 'FLP'.rand(1, 10000000000);
    $signature = md5('4Vj8eK4rloUd272L48hsrarnUA~508029~'.$referenceCode.'~'.$total.'~COP');

    $datosPayu=[
      'nombre' => $client['nombre'],
      'referenceCode' => $referenceCode,
      'amount' => $total,
      'signature' => $signature,
      'description' => $description
    ];

    //GUARDANDO INFORMACION GENERAL
    $datosOrden = \Session::get('datosOrden');
    $datosOrden['mensaje'] = $request->mensaje;
    $datosOrden['instrucciones'] = $request->instrucciones;
    $datosOrden['referencia'] = $referenceCode;
    $datosOrden['descripcion'] = $datosPayu['description'];
    $datosOrden['total'] = $total;
    $datosOrden['accion'] = $request->accion;

    \Session::put('datosOrden',$datosOrden);
    //FIN

    return view('pagos')->with('client',$client)->with('request',$request)
                        ->with('total',$total)
                        ->with('subtotal',$subtotal)
                        ->with('datosPayu',$datosPayu);
  }

  public function crearOrden(){
    $client = \Session::get('client');
    $datosOrden = \Session::get('datosOrden');

    $orden = new Orden();
    $orden->estado = 'Pendiente';
    $orden->referencia = $datosOrden['referencia'];
    $orden->nombre_cliente = $client['nombre'];
    $orden->correo_cliente = $client['correo'];
    $orden->telefono_cliente = $client['telefono'];
    $orden->descripcion = $datosOrden['descripcion'];
    $orden->direccion = $client['direccion'];
    $orden->barrio = $client['barrio'];
    $orden->recibe = $client['recibe'];
    $orden->fecha = $client['fecha'];
    $orden->hora = $client['hora'];
    $orden->total = $datosOrden['total'];
    $orden->mensaje = $datosOrden['mensaje'];
    $orden->instruciones = $datosOrden['instrucciones'];
    $orden->accion = $datosOrden['accion'];
    $orden->save();

    return $orden;
  }


  public function pagar(Request $request){
     $client = \Session::get('client');
     $client['nombre'] = $request->nombre;
     $client['telefono'] = $request->telefono;
     $client['correo'] = $request->correo;
     $client['direccion'] = $request->direccion;
     $client['esp_direccion'] = $request->esp_direccion;
     $client['barrio'] = $request->barrio;
     $client['recibe'] = $request->recibe;
     $client['fecha'] = $request->fecha;
     $client['hora'] = $request->hora;
      \Session::put('client',$client);

      return $client;
  }





}
