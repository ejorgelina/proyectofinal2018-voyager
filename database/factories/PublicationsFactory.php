<?php

use Faker\Generator as Faker;
use App\Publication;

$factory->define(Publication::class, function (Faker $faker) {
  return [
    'contenido' => $faker->paragraph(10),
    'titulo' => $faker->sentence($nbWords = 6, $variableNbWords = true) ];
  });
