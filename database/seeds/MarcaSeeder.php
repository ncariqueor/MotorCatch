<?php

use Illuminate\Database\Seeder;

use App\Marca;

class MarcaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $marcas = factory(Marca::class)->times(100)->create();
    }
}
