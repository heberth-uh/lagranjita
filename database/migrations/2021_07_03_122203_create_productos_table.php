<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('nombre');
            $table->string('etapa');
            $table->string('categoria');
            $table->string('marca');
            //Se agregó una nueva columna 'peso' en add_peso_to_products.php
            $table->string('precioSaco'); //Tipo de dato actualizado a decimal
            $table->string('precioKg'); //Tipo de dato actualizado a decimal
            $table->integer('totalSacos');
            $table->decimal('totalKg', $precision = 8, $scale = 2);
            $table->longText('descripcion');
            $table->string('imagen');
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
