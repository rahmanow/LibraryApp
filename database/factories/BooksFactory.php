<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Books;
use Faker\Generator as Faker;

$factory->define(Books::class, function (Faker $faker) {
    return [
        'author_id' => factory(App\Authors::class), // generates author from Authors Factory
        'name' => $faker->sentence(3, true), // Book name with 3 words as one string (not array)
        'release_date' => $faker->date('Y-m-d', 'now') // Release date with year-month-day format, maximum date is now.
    ];
});
