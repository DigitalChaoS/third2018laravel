<?php

use Faker\Generator as Faker;

$factory->define(App\Question::class, function (Faker $faker) {
    return [
        'Ford' => $faker->name,
        'Honda' => $faker->name,
        'Toyota' => $faker->name,
    ];
});
