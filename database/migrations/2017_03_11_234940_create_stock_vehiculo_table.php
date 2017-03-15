<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStockVehiculoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stock_vehiculos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('precio')->unsigned();
            $table->integer('num_puertas')->unsigned();
            $table->integer('num_asientos')->unsigned();
            $table->integer('fecha_stock')->unsigned();
            $table->string('estado_stock', 10);
            
            $table->integer('id_motor')->unsigned();
            $table->foreign('id_motor')->references('id')->on('motores');
            
            $table->string('patente', 7);
            $table->foreign('patente')->references('patente')->on('vehiculos');
            
            $table->integer('id_transmision')->unsigned();
            $table->foreign('id_transmision')->references('id')->on('transmisiones');
            
            $table->integer('rut_vendedor')->unsigned();
            $table->foreign('rut_vendedor')->references('rut')->on('clientes');
            
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
        Schema::drop('stock_vehiculos');
    }
}
