<?php

namespace App\APIs;

use Faker\Factory;
use App\Contracts\UserAPI;

class FakeUser implements UserAPI
{

    /**
     * Faker\Factory instance for generate fake data.
     *
     * @var Faker\Factory
     */
    private $faker;

    /**
     * Patient's gender.
     *
     * @var mixed
     */
    private $gender = '';

    public function __construct()
    {
        $this->faker = Factory::create();
    }

    public function getUser($orgId)
    {
        if ($this->gender === '') {
            $this->gender = (($orgId % 2) == 0);
        }

        $name = $this->gender
            ? $this->faker->firstNameFemale . ' ' . $this->faker->lastName
            : $this->faker->firstNameMale . ' ' . $this->faker->lastName;

        $data['reply_code'] = 0;
        $data['reply_text'] = 'success.';
        $data['document_id'] = $this->faker->ean13;
        $data['org_id'] = $orgId;
        $data['name'] = $name;
        $data['name_en'] = $name;
        $data['org_division_id'] = 111111;
        $data['org_division_name'] = 'สำนักบริหาร';
        $data['org_position_id'] = 222222;
        $data['org_position_title'] = 'เจ้าหน้าที่บริหารงานทั่วไป';
        $data['email'] = $orgId . '@organization.org';
        $data['tel_no'] = '01' . $this->faker->ean8;
        $data['active'] = 1;

        return $data;
    }

    public function authenticate(array $data)
    {
        return $data['password'] == $data['org_id']
            ? ['resultCode' => 0, 'resultText' => 'granted.']
            : ['resultCode' => 3, 'resultText' => 'wrong password.'];
    }
}
