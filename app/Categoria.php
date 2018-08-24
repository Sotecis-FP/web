<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    public function subcategoria(){
      return $this->hasMany('App\Subcategoria');
    }
}
