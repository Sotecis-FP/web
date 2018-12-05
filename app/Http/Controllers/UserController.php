<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class UserController extends Controller
{
  public function verificar(Request $request){
    if (Auth::attempt(['email'=>$request['usuario'], 'password'=>$request['pass']])) {
      if (Auth::User()->rol == 'admin') {
        return redirect()->to('dashboard');
      }
      return redirect()->to('/administracion');
    }
    return back();
  }
  public function logout(){
    Auth()->logout();
    return view('login');
  }
}
