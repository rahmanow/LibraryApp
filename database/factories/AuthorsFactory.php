<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Authors;
use Faker\Generator as Faker;

$factory->define(Authors::class, function (Faker $faker) {
    return [
        'name' => $faker->name, // Generates name
        'age' => $faker->numberBetween(20, 100), // Generate age between 20 to 100
        'address' => $faker->address // Generates adress
    ];
});
