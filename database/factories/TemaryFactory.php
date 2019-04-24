<?php

use Faker\Generator as Faker;

$factory->define(\App\Temary::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'ponent' => $faker->name,
        'course_id' => \App\Course::inRandomOrder()->first()->id
    ];
});
