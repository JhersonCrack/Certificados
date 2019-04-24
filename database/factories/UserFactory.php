<?php

use Faker\Generator as Faker;

$factory->define(\App\User::class, function (Faker $faker) {
    return [
        'dni' => $faker->randomNumber(8),
        'cip' => $faker->randomNumber(5),
        'name' => $faker->name
    ];
});
