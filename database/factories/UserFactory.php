<?php
use Faker\Generator as Faker;

$factory->define(\App\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => bcrypt($faker->password),
        'dni' => $faker->randomNumber(8),
        'cip' => $faker->randomNumber(5)
    ];
});
