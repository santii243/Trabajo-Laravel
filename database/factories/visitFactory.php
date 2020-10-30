<?php

use Faker\Generator as Faker;

$factory->define(App\visit::class, function (Faker $faker) {
    return [
        'tutor_c_id' =>\App\tutor_c::all()->random()->id,
        'enterprise_id' => \app\enterprise::all()->random()->id,
        'date' => $faker->dateTime($max = 'now', $timezone = null),
        'kms' => $faker->numberBetween($min = 1, $max = 200),
        'accepted' => $faker->boolean,
        'deleted' => $faker->boolean
    ];
});