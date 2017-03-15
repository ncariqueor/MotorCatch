<?php

use Illuminate\Database\Seeder;

use App\Cuota;

use App\OrdenCompra;

class CuotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ordenes = OrdenCompra::all();
        
        $cuotas = factory(Cuota::class)->times(100)->make();
        
        foreach($cuotas as $cuota){
            $orden = $ordenes->random();
            
            $cuota->id_orden_compra = $orden->id;
            
            $cuota->save();
        }
    }
}
