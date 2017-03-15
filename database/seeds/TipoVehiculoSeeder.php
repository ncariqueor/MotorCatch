<?php

use Illuminate\Database\Seeder;

use App\TipoVehiculo;

class TipoVehiculoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TipoVehiculo::create(['tipo_vehiculo' => 'Auto']);
        TipoVehiculo::create(['tipo_vehiculo' => 'Camioneta']);
        TipoVehiculo::create(['tipo_vehiculo' => 'Minibus']);
        TipoVehiculo::create(['tipo_vehiculo' => 'Bus']);
        TipoVehiculo::create(['tipo_vehiculo' => 'Moto']);
        TipoVehiculo::create(['tipo_vehiculo' => 'Van']);
        TipoVehiculo::create(['tipo_vehiculo' => 'Camión']);
    }
}
