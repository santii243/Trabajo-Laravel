<?php

use Faker\Generator as Faker;

$factory->define(App\task::class, function (Faker $faker) {
    return [
        'number' => $faker->randomDigit,
        'description' => $faker->sentence,
        'deleted' => $faker->boolean = false,
    ];
});