<?php

use Illuminate\Database\Seeder;

use App\TipoVehiculo;

use App\Marca;

use App\Modelo;

class ModeloSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tipo_vehiculos = TipoVehiculo::all();
        
        $marcas = Marca::all();
        
        $modelos = factory(Modelo::class)->times(100)->make(); //Esto genera en ram las notas
        
        foreach($modelos as $modelo){
            $marca = $marcas->random();
            
            $tipo_vehiculo = $tipo_vehiculos->random();
            
            $modelo->marca_id = $marca->id;
            
            $modelo->tipo_vehiculo_id = $tipo_vehiculo->id;
            
            $modelo->save();
        
        }
    }
}
