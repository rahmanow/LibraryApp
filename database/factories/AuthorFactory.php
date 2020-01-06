<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Author;
use Faker\Generator as Faker;

$factory->define(Author::class, function (Faker $faker) {
    return [
        'author_name' => $faker->name, // Generates name
        'age' => $faker->numberBetween(20, 100), // Generate age between 20 to 100
        'address' => $faker->address // Generates adress
    ];
});
