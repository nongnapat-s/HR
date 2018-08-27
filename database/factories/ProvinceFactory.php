<?php

use Faker\Generator as Faker;

$factory->define(App\Province::class, function (Faker $faker) {
    return [
        'id' => $faker->unique()->numberBetween(1, 255),
        'name' => $faker->unique()->city(),
        'region' => $faker->numberBetween(1, 6)
    ];
});
