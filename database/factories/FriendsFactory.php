<?php

use Faker\Generator as Faker;
use App\Friend;

$factory->define(App\Friend::class, function (Faker $faker) {
  return [
    'idAmigo2' =>  App\User::all()->random()->id,
  ];
});
