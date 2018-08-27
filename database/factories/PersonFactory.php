<?php

use Faker\Generator as Faker;

$factory->define(App\Person::class, function (Faker $faker) {
    return [
        'id' => $faker->unique()->uuid(),
        
        'title_id' => function (array $person) {
            $titles = App\Title::where('gender', '!=', $person['gender'] ? 0:1)->get();
            return $titles[rand(0, count($titles) - 1)]->id;
        },
        'first_name' => $faker->firstName(),
        'first_name_eng' => function (array $person) { return $person['first_name']; },
        'last_name' => $faker->lastName(),
        'last_name_eng' => function (array $person) { return $person['last_name']; },
        'middle_name' => null,
        'middle_name_eng' => null,
        'nickname' => function (array $person) { return $person['first_name']; },
        'dob' => $faker->dateTimeBetween('-65 years', '-25 years'),
        'gender' => $faker->numberBetween(0, 1),
        'blood_group' => $faker->numberBetween(1, 8),
        'race' => 1,
        'nation' => 1,
        'religion' => $faker->numberBetween(1, 4),
        'marital_status' => $faker->numberBetween(1, 4),
        'document_no' => $faker->unique()->regexify('[0-9]{13}'),
        'career' => $faker->numberBetween(1, 10),
        'contact_address' => $faker->buildingNumber() . ' ' . $faker->streetName(),
        'contact_postcode_id' => function () {
            $postcodes = App\Postcode::all();
            return $postcodes[rand(0, App\Postcode::count() - 1)]->id;
        },
        'contact_phone_no' => $faker->e164PhoneNumber(),
        'potrait' => '',
        'alive' => true,
    ];
});
