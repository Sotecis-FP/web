<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Imagen extends Model
{
    public function producto(){
      return $this->belongTo('App\Prodcuto');
    }
}
