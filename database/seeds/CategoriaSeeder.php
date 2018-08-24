<?php

use Illuminate\Database\Seeder;
use App\Categoria;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Categoria::create([
          'nombre' => 'ARREGLOS NATURALES'
        ]);
        Categoria::create([
          'nombre' => 'ARREGLOS ARTIFICIALES'
        ]);
        Categoria::create([
          'nombre' => 'NOVIAS'
        ]);
    }
}
