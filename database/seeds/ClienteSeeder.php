<?php

use Illuminate\Database\Seeder;

use App\Cliente;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $clientes = factory(Cliente::class)->times(100)->create();
    }
}
