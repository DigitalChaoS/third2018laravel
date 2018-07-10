<?php

use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'title' => $faker->name,
        'body' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
    ];
});
