<?php

use Faker\Generator as Faker;
use App\Travelplan;


$factory->define(Travelplan::class, function (Faker $faker) {
    return [
      'fecha_de_salida' => $faker->dateTime(),
      'fecha_de_regreso' => $faker->dateTime(),
      'presupuesto' => $faker->randomNumber(),
      'destino' => $faker->country(),
      'detalle' => $faker->paragraph(10)    ];
});
