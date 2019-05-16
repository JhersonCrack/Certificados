<?php
use Faker\Generator as Faker;

$factory->define(\App\Course::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'hours' => $faker->randomNumber(2),
        'amount' => $faker->randomFloat(2,0,1000),
        'date' => $faker->date('Y-m-d', 'now'),
        'code' => $faker->md5
    ];
});
