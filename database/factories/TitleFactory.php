<?php

use Faker\Generator as Faker;

$factory->define(App\Title::class, function (Faker $faker) {
    return [
        'id' => $faker->unique()->numberBetween(1, 255),
        'name' => $faker->unique()->words(2, true),
        'name_short' => function(array $title) {
            return substr(explode(' ', $title['name'])[0], 0, 1) . 
                   substr(explode(' ', $title['name'])[1], 0, 1) . '.';
        },
        'name_eng' => function(array $title) { return $title['name']; },
        'name_eng_short' => function(array $title) { return $title['name_short']; },
        'gender' => $faker->numberBetween(0, 2)
    ];
});
