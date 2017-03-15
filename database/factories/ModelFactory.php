<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Cliente::class, function (Faker\Generator $faker) {
    return [
        'rut' => $faker->numberBetween(40000000, 260000000),
        'nombre' => $faker->name,
        'apellido' => $faker->lastName,
        'telefono' => $faker->randomNumber(9),
        'mail' => $faker->safeEmail,
        'direccion' => $faker->address
    ];
});

$factory->define(App\Cuota::class, function (Faker\Generator $faker) {
    return [
        'fecha_pago' => $faker->numberBetween(20170101, 20170312),
        'fecha_pago_cliente' => $faker->numberBetween(20170101, 20170312),
        'monto_pagar' => $faker->numberBetween(400000, 1500000),
        'monto_pagado' => $faker->numberBetween(400000, 1500000),
        'num_cuota' => $faker->numberBetween(1, 48),
        'estado' => $faker->randomElement(array('Pagado', 'Pendiente'))
    ];
});

$factory->define(App\Marca::class, function (Faker\Generator $faker) {
    return [
        'nombre_marca' => $faker->name
    ];
});

$factory->define(App\Modelo::class, function (Faker\Generator $faker) {
    return [
        'nombre_modelo' => $faker->name
    ];
});

$factory->define(App\Motor::class, function (Faker\Generator $faker) {
    return [
        'nombre_motor' => $faker->name,
        'cilindrada' => $faker->numberBetween(1000, 3000),
        'potencia' => $faker->numberBetween(100, 200)
    ];
});

$factory->define(App\OrdenCompra::class, function (Faker\Generator $faker) {
    return [
        'fecha_compra' => $faker->numberBetween(20170101, 20170312),
        'num_cuotas' => $faker->numberBetween(1, 48)
    ];
});

$factory->define(App\StockVehiculo::class, function (Faker\Generator $faker) {
    return [
        'precio' => $faker->numberBetween(500000, 100000000),
        'num_puertas' => $faker->numberBetween(2, 4),
        'num_asientos' => $faker->numberBetween(1, 64),
        'fecha_stock' => $faker->numberBetween(20160215, 20170312)
    ];
});

$factory->define(App\Vehiculo::class, function (Faker\Generator $faker) {
    return [
        'patente' => $faker->regexify('[A-Z][A-Z][A-Z][A-Z][0-9][0-9]'),
        'year' => $faker->numberBetween(1990, 2017)
    ];
});