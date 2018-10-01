<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Orden;

class OrderController extends Controller
{
    public function listar(){

      $ordenes = Orden::all();

      return view('admin.orden.listar')->with('ordenes',$ordenes);
    }

    public function ver($id){
      $orden = Orden::find($id);
      return view('admin.orden.ver')->with('orden',$orden);
    }

    public function buscar($estado){
      $ordenes = Orden::where('estado',$estado)->get();
      return view('admin.orden.listar')->with('ordenes',$ordenes);

    }

    public function editar(Orden $orden){
      return view('admin.orden.editar')->with('orden',$orden);
    }

    public function actualizar(Orden $orden,Request $request){
      $orden->estado = 'Pendiente';
      $orden->nombre_cliente = $request['nombre_cliente'];
      $orden->correo_cliente = $request['correo_cliente'];
      $orden->telefono_cliente = $request['telefono_cliente'];
      $orden->descripcion = $request['descripcion'];
      $orden->direccion = $request['direccion'];
      $orden->barrio = $request['barrio'];
      $orden->recibe = $request['recibe'];
      $orden->fecha = $request['fecha'];
      $orden->hora = $request['hora'];
      $orden->total = $request['total'];
      $orden->mensaje = $request['mensaje'];
      $orden->instruciones = $request['instruciones'];
      $orden->accion = $request['accion'];
      $orden->estado = $request['estado'];
      $orden->save();

      return back();

    }

}
