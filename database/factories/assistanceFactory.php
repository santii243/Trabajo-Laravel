<?php

use Faker\Generator as Faker;

$factory->define(App\assistance::class, function (Faker $faker) {
    return [
        'student_id' => \App\student::all()->random()->id,
        'date' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'assistances'=> $faker->sentence,
        'deleted' => $faker->boolean
    ];
});
