<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;
use App\Subcategoria;
use App\Imagen;
use App\Producto;

class ProductoController extends Controller
{
    public function index(){

    }
    public function create(){
      $categorias = Categoria::all();
      return view('admin.producto.crear')->with('categorias',$categorias);
    }

    public function store(Request $request){
      $producto = new Producto();

      $producto->codigo = $request->codigo;
      $producto->nombre = $request->nombre;
      $producto->descripcion = $request->descripcion;
      $producto->cantidad = $request->cantidad;
      if ($request->subcategoria) {
          $producto->subcategoria_id = (int)$request->subcategoria;
      }
      if ($request->categoria) {
          $producto->categoria_id = (int)$request->categoria;
      }
      if ($request->file('imagen')){
          $producto->imagen = $request->file('imagen')->store('productos');
      }


      $producto->precio = $request->precio;
      $producto->save();


      if ($request->file('imagenes')) {
        foreach ($request->file('imagenes') as $value) {

           $image = new Imagen();

           $image->url = $value->store('productos');
           $image->producto_id = (int)$producto->id;
           $image->save();
        }

      }
      dd($producto);

    }

    public function bySubcategoria($id){
        return Subcategoria::where('categoria_id',$id)->get();
    }
}
