<?php

use Illuminate\Database\Seeder;

use App\Motor;

class MotorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $motores = factory(Motor::class)->times(100)->create();
    }
}
