<?php

use Illuminate\Database\Seeder;

use App\Motor;
use App\Vehiculo;
use App\Transmision;
use App\Cliente;
use App\StockVehiculo;
    
class StockVehiculoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $motores = Motor::all();
        
        $vehiculos = Vehiculo::all();
        
        $transmisiones = Transmision::all();
        
        $clientes = Cliente::all();
        
        $stock_vehiculos = factory(StockVehiculo::class)->times(100)->make();
        
        foreach($stock_vehiculos as $stock_vehiculo){
            $vehiculo = $vehiculos->random();
            
            $motor = $motores->random();
            
            $transmision = $transmisiones->random();
            
            $cliente = $clientes->random();
            
            $stock_vehiculo->id_motor = $motor->id;
            
            $stock_vehiculo->patente = $vehiculo->patente;
            
            $stock_vehiculo->id_transmision = $transmision->id;
            
            $stock_vehiculo->rut_vendedor = $cliente->rut;
            
            $stock_vehiculo->save();
        }
    }
}
