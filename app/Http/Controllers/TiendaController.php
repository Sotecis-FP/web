<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;
use App\Subcategoria;
use App\Categoria;
use App\Imagen;

class TiendaController extends Controller
{
    public function index(){
      $productos = Producto::where('categoria_id',1)->get();
      $subcategorias = Subcategoria::where('categoria_id',1)->get();
      return view('tienda')->with('productos',$productos)
                           ->with('subcategorias',$subcategorias);
    }
    public function opcion($id){
      $categoria = Categoria::find($id);

      $subcategorias = Subcategoria::where('categoria_id',$id)->get();
      $productos = Producto::where('categoria_id',$id)->get();



      return view('tienda')->with('productos',$productos)
                           ->with('subcategorias',$subcategorias)
                           ->with('categoria',$categoria);
    }

    public function subcategoria($id){
      $subcategorias = Subcategoria::where('categoria_id',$id)->get();
      return $subcategorias;
    }

    public function getProductos($id){
      return $productos = Producto::where('subcategoria_id',$id)->get();
    }
    public function getProCategoria($id){
      return $productos = Producto::where('categoria_id',$id)->get();
    }

    public function ver($id){
      return $productos = Producto::where('subcategoria_id',$id)->get();

    }
    public function detalle($id){
      $producto = Producto::find($id);
      $imagenes = Imagen::where('producto_id',$producto->id)->get();
      return view('detalle')->with('producto',$producto)
                            ->with('imagenes',$imagenes);
    }


}
