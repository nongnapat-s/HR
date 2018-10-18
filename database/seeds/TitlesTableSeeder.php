<?php

use Illuminate\Database\Seeder;

class TitlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $titles = [
            [
                'id' => 1,
                'name' => 'นาย',
                'name_short' => 'นาย',
                'name_eng' => 'Mr.',
                'name_eng_short' => 'Mr.',
                'gender' => 1,
                'titled' => false
            ],
            [
                'id' => 2,
                'name' => 'นาง',
                'name_short' => 'นาง',
                'name_eng' => 'Mrs.',
                'name_eng_short' => 'Mrs.',
                'gender' => 0,
                'titled' => false
            ],
            [
                'id' => 3,
                'name' => 'น. ส.',
                'name_short' => 'น. ส.',
                'name_eng' => 'Miss.',
                'name_eng_short' => 'Miss.',
                'gender' => 0,
                'titled' => false
            ],
            [
                'id' => 4,
                'name' => 'คุณ',
                'name_short' => 'คุณ',
                'name_eng' => 'Khun',
                'name_eng_short' => 'Khun',
                'gender' => 2,
                'titled' => false
            ],
            [
                'id' => 5,
                'name' => 'ศ. นพ.',
                'name_short' => 'ศ. นพ.',
                'name_eng' => 'Prof.',
                'name_eng_short' => 'Prof.',
                'gender' => 1,
                'titled' => true
            ],
            [
                'id' => 6,
                'name' => 'ศ. พญ.',
                'name_short' => 'ศ. พญ.',
                'name_eng' => 'Prof.',
                'name_eng_short' => 'Prof.',
                'gender' => 0,
                'titled' => true
            ],
            [
                'id' => 7,
                'name' => 'ศ. คลินก นพ.',
                'name_short' => 'ศ. คลินก นพ.',
                'name_eng' => 'hello',
                'name_eng_short' => 'hello',
                'gender' => 1,
                'titled' => true
            ],
            [
                'id' => 8,
                'name' => 'ศ. คลินก พญ.',
                'name_short' => 'ศ. คลินก พญ.',
                'name_eng' => 'hello',
                'name_eng_short' => 'hello',
                'gender' => 0,
                'titled' => true
            ],
            [
                'id' => 9,
                'name' => 'รศ. นพ.',
                'name_short' => 'รศ. นพ.',
                'name_eng' => 'Assoc. Prof.',
                'name_eng_short' => 'Assoc. Prof.',
                'gender' => 1,
                'titled' => true
            ],
            [
                'id' => 10,
                'name' => 'รศ. พญ.',
                'name_short' => 'รศ. พญ.',
                'name_eng' => 'Assoc. Prof.',
                'name_eng_short' => 'Assoc. Prof.',
                'gender' => 0,
                'titled' => true
            ],
            [
                'id' => 11,
                'name' => 'ผศ. นพ.',
                'name_short' => 'ผศ. นพ.',
                'name_eng' => 'Assist. Prof.',
                'name_eng_short' => 'Assist. Prof.',
                'gender' => 1,
                'titled' => true
            ],
            [
                'id' => 12,
                'name' => 'ผศ. พญ.',
                'name_short' => 'ผศ. พญ.',
                'name_eng' => 'Assist. Prof.',
                'name_eng_short' => 'Assist. Prof.',
                'gender' => 0,
                'titled' => true
            ],
            [
                'id' => 13,
                'name' => 'อ. นพ.',
                'name_short' => 'อ. นพ.',
                'name_eng' => 'Dr.',
                'name_eng_short' => 'Dr.',
                'gender' => 1,
                'titled' => false
            ],
            [
                'id' => 14,
                'name' => 'อ. พญ.',
                'name_short' => 'อ. พญ.',
                'name_eng' => 'Dr.',
                'name_eng_short' => 'Dr.',
                'gender' => 0,
                'titled' => false
            ],
            [
                'id' => 15,
                'name' => 'ศ. เกียรติคุณ นพ.',
                'name_short' => 'ศ. เกียรติคุณ นพ.',
                'name_eng' => 'hello',
                'name_eng_short' => 'hello',
                'gender' => 1,
                'titled' => true
            ],
            [
                'id' => 16,
                'name' => 'ศ. เกียรติคุณ พญ.',
                'name_short' => 'ศ. เกียรติคุณ พญ.',
                'name_eng' => 'hello',
                'name_eng_short' => 'hello',
                'gender' => 0,
                'titled' => true
            ],
            [
                'id' => 17,
                'name' => 'นพ.',
                'name_short' => 'นพ.',
                'name_eng' => 'hello',
                'name_eng_short' => 'hello',
                'gender' => 1,
                'titled' => false
            ],
            [
                'id' => 18,
                'name' => 'พญ.',
                'name_short' => 'พญ.',
                'name_eng' => 'hello',
                'name_eng_short' => 'hello',
                'gender' => 0,
                'titled' => false
            ],
        ];
        foreach ($titles as $title) {
            App\Models\Lists\Title::create($title);
        }
    }
}
