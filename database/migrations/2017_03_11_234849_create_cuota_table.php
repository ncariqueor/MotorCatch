<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCuotaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cuotas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('fecha_pago')->unsigned();
            $table->integer('fecha_pago_cliente')->unsigned();
            $table->integer('monto_pagar')->unsigned();
            $table->integer('monto_pagado')->unsigned();
            $table->integer('num_cuota')->unsigned();
            $table->string('estado', 10);
            $table->integer('id_orden_compra')->unsigned();
            $table->foreign('id_orden_compra')->references('id')->on('ordenes');
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
        Schema::drop('cuotas');
    }
}
