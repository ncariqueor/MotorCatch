<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // $this->call(UserTableSeeder::class);
        
        
        //$this->call(ClienteSeeder::class);
        //$this->call(MarcaSeeder::class);
        //$this->call(MotorSeeder::class);
        //$this->call(TipoPagoSeeder::class);
        //$this->call(TipoVehiculoSeeder::class);
        //$this->call(TransmisionSeeder::class);
        //$this->call(ModeloSeeder::class);
        //$this->call(VehiculoSeeder::class);
        //$this->call(StockVehiculoSeeder::class);
        //$this->call(OrdenCompraSeeder::class);
        //$this->call(VentaVehiculoSeeder::class);
        $this->call(CuotaSeeder::class);
        
        
        Model::reguard();
        
    }
}
