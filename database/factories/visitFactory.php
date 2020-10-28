<?php

use Faker\Generator as Faker;

$factory->define(App\visit::class, function (Faker $faker) {
    return [
        'id' => \App\id::all()->random()->id,
        'tutor_c_id' =>\App\tutor_c::all()->random()->id,
        'enterprise_id' =>\App\enterprise::all()->random()->id,
        'date' => $faker->dateTime($max = 'now', $timezone = null),
        'kms' => $faker->number_format
    ];
});