<?php

use Faker\Generator as Faker;
use App\Publication;

$factory->define(Publication::class, function (Faker $faker) {
    return [
        'contenido' => $faker->paragraph(10) //ojooo arrraaayyyy
    ];
});
