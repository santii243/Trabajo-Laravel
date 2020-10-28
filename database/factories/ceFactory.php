<?php

use Faker\Generator as Faker;

$factory->define(App\ce::class, function (Faker $faker) {
    return [
        'id' => \App\ce::all()->random()->id,
        'word' => $faker->char,
        'description' => $faker->paragraph,
        'ra_id' => \App\ra::all()->random()->id,
        'task_id' => \App\task::all()->random->id,
        'mark' => $faker->integer,
        'deleted' => $faker->boolean,
    ];
});