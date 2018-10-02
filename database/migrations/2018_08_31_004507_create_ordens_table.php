<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ordens', function (Blueprint $table) {
            $table->increments('id');
            $table->string('estado')->nullable();
            $table->string('accion')->nullable();
            $table->string('referencia')->nullable();
            $table->string('nombre_cliente')->nullable();
            $table->string('correo_cliente')->nullable();
            $table->string('telefono_cliente')->nullable();
            $table->string('descripcion')->nullable();
            $table->string('direccion')->nullable();
            $table->string('mensaje')->nullable();
            $table->string('instruciones')->nullable();
            $table->string('barrio')->nullable();
            $table->string('recibe')->nullable();
            $table->string('fecha')->nullable();
            $table->string('hora')->nullable();
            $table->string('total')->nullable();
            $table->string('de')->nullable();
            $table->string('para')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ordens');
    }
}
