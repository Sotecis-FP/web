<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarroController extends Controller
{
    public function agregar(){
      toast('Se agregó al carro','success','top-right');
      return back();
    }
    public function index(){

      return view('carro');
    }


}
