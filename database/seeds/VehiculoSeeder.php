<?php

use Illuminate\Database\Seeder;

use App\Vehiculo;

use App\Modelo;

class VehiculoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {        
        $modelos = Modelo::all(); //Esto genera en ram las notas
        
        $vehiculos = factory(Vehiculo::class)->times(100)->make();
        
        foreach($vehiculos as $vehiculo){
            $modelo = $modelos->random();
            
            $vehiculo->id_modelo = $modelo->id;
            
            $vehiculo->save();
        }
    }
}
