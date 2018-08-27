<?php

use Faker\Generator as Faker;

$factory->define(App\Postcode::class, function (Faker $faker) {
    return [
        'id' => $faker->unique()->numberBetween(1, 20000),
        'postcode' => $faker->unique()->numberBetween(10000, 90000),
        'province_id' => function () {
            $provinces = App\Province::all();
            return $provinces[rand(0, App\Province::count() - 1)]->id;
        },
        'location' => $faker->unique()->streetAddress()
    ];
});
