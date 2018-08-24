<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codigo')->nullable();
            $table->string('nombre')->nullable();
            $table->string('descripcion',1200);
            $table->string('cantidad')->nullable();
            $table->string('precio')->nullable();
            $table->string('imagen')->nullable();


            $table->integer('categoria_id')->unsigned()->nullable();
            $table->foreign('categoria_id')
                  ->references('id')
                  ->on('categorias')
                  ->onDelete('cascade');

            $table->integer('subcategoria_id')->unsigned()->nullable();
            $table->foreign('subcategoria_id')
                  ->references('id')
                  ->on('subcategorias')
                  ->onDelete('cascade');

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
        Schema::dropIfExists('productos');
    }
}
