<?php

use Illuminate\Database\Seeder;

use App\TipoPago;

class TipoPagoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TipoPago::create(['tipo_pago' => 'débito']);
        TipoPago::create(['tipo_pago' => 'crédito']);
    }
}
