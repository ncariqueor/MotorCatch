<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdenCompraTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ordenes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('fecha_compra');
            $table->integer('num_cuotas');
            $table->integer('rut_cliente')->unsigned();
            $table->foreign('rut_cliente')->references('rut')->on('clientes');
            $table->integer('tipo_pago_id')->unsigned();
            $table->foreign('tipo_pago_id')->references('id')->on('tipo_pagos');
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
        Schema::drop('ordenes');
    }
}
