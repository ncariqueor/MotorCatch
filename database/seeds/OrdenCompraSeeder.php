<?php

use Illuminate\Database\Seeder;

use App\OrdenCompra;

use App\Cliente;

use App\TipoPago;

class OrdenCompraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $clientes = Cliente::all();
        
        $tipo_pagos = TipoPago::all();
        
        $ordenes = factory(OrdenCompra::class)->times(100)->make(); //Esto genera en ram las notas
        
        foreach($ordenes as $orden){
            $cliente = $clientes->random();
            
            $tipo_pago = $tipo_pagos->random();
            
            $orden->rut_cliente = $cliente->rut;
            
            $orden->tipo_pago_id = $tipo_pago->id;
            
            $orden->save();
        }
    }
}
