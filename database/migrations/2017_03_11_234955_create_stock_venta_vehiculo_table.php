<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStockVentaVehiculoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('venta_vehiculos', function (Blueprint $table) {
            $table->increments('id');
            
            $table->integer('id_stock')->unsigned();
            $table->foreign('id_stock')->references('id')->on('stock_vehiculos');
            
            $table->integer('id_boleta')->unsigned();
            $table->foreign('id_boleta')->references('id')->on('ordenes');
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
        Schema::drop('venta_vehiculos');
    }
}
