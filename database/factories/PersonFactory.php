<?php

use App\Models\Person;
use App\Models\Lists\Title;
use Faker\Generator as Faker;
use App\Models\Lists\Postcode;
use App\Models\Lists\SelectItem;

$factory->define(Person::class, function (Faker $faker) {
    return [
        'id' => $faker->unique()->numberBetween(1, 20000),
        'prefix_id' => function (array $person) {
            $titles = Title::where('gender', '!=', $person['gender'] ? 0:1)->get();
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
        'blood_group' => $faker->numberBetween(
            SelectItem::where('field', 'blood_group')->orderBy('value')->first()->value,
            SelectItem::where('field', 'blood_group')->orderBy('value','desc')->first()->value
        ),
        'race' => 1,
        'nation' => 1,
        'religion' => $faker->numberBetween(
            SelectItem::where('field', 'religion')->orderBy('value')->first()->value,
            SelectItem::where('field', 'religion')->orderBy('value', 'desc')->first()->value
        ),
        'marital_status' => $faker->numberBetween(
            SelectItem::where('field', 'marital_status')->orderBy('value')->first()->value,
            SelectItem::where('field', 'marital_status')->orderBy('value', 'desc')->first()->value
        ),
        'document_no' => $faker->unique()->regexify('[0-9]{13}'),
        'career' => $faker->numberBetween(
            SelectItem::where('field', 'career')->orderBy('value')->first()->value,
            SelectItem::where('field', 'career')->orderBy('value', 'desc')->first()->value
        ),
        'contact_address' => $faker->buildingNumber() . ' ' . $faker->streetName(),
        'contact_postcode_id' => $faker->numberBetween(Postcode::min('id'), Postcode::count()),
        'contact_phone_no' => $faker->e164PhoneNumber(),
        'potrait' => '',
        'alive' => true,
    ];
});
