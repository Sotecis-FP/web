<?php

use Illuminate\Database\Seeder;
use App\Subcategoria;

class SubcategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Subcategoria::create([
        'nombre'=>'AMOR Y AMISTAD',
        'categoria_id'=>1
      ]);
      Subcategoria::create([
        'nombre'=>'ANIVERSARIOS',
        'categoria_id'=>1
      ]);
      Subcategoria::create([
        'nombre'=>'ARREGLOS PRIMAVERALES',
        'categoria_id'=>1
      ]);
      Subcategoria::create([
        'nombre'=>'BABY SHOWER',
        'categoria_id'=>1
      ]);
      Subcategoria::create([
        'nombre'=>'BAUTIZOS',
        'categoria_id'=>1
      ]);
      Subcategoria::create([
        'nombre'=>'BODAS',
        'categoria_id'=>1
      ]);
      Subcategoria::create([
        'nombre'=>'CUMPLEAÑOS',
        'categoria_id'=>1
      ]);
      Subcategoria::create([
        'nombre'=>'MADRES',
        'categoria_id'=>1
      ]);

      // ARREGLOS NATURALES

      Subcategoria::create([
        'nombre'=>'ARREGLOS EN ROSAS',
        'categoria_id'=>2
      ]);
      Subcategoria::create([
        'nombre'=>'ARREGLOS EXOTICOS',
        'categoria_id'=>2
      ]);
    }
}
