<?php

use Illuminate\Database\Seeder;

use App\Transmision;

class TransmisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Transmision::create(['tipo_transmision' => 'automática']);
        Transmision::create(['tipo_transmision' => 'manual']);
    }
}
