<?php

use Illuminate\Database\Seeder;

use App\StockVehiculo;

use App\OrdenCompra;

use App\VentaVehiculo;

class VentaVehiculoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ordenes = OrdenCompra::all();
        
        $stock_vehiculos = StockVehiculo::all();
        
        for($i = 1; $i <= 100; $i++){
            $orden = $ordenes->random();
            
            $stock_vehiculo = $stock_vehiculos->random();
            
            $venta_vehiculo = new VentaVehiculo(
                ['id_stock' => $stock_vehiculo->id,
            
                 'id_boleta' => $orden->id
                ]
            );
            
            $venta_vehiculo->save();
        }
    }
}
