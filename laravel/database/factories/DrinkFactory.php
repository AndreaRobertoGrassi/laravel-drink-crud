<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Drink;
use Faker\Generator as Faker;

$factory->define(Drink::class, function (Faker $faker) {
    return [
      'name' => $faker-> unique -> word,
      'gradation' => rand(5,40),
      'price' => $faker -> randomFloat(2, 1, 100)
    ];
});
