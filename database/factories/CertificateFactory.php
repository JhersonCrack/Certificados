    <?php

use Faker\Generator as Faker;

$factory->define(\App\Certificate::class, function (Faker $faker) {
    return [
        'file_path' => $faker->mimeType,
        'qr' => $faker->word,

        'course_id' => \App\Course::inRandomOrder()->first()->id,
        'user_id' => \App\User::inRandomOrder()->first()->id,
        'type_id' => \App\Type::inRandomOrder()->first()->id
    ];
});
