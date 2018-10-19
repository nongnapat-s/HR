<?php

use Illuminate\Database\Seeder;

class SelectItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            // Blood group
            ['field' => 'blood_group', 'value' =>  2, 'order' =>  1, 'label' => 'A'],
            ['field' => 'blood_group', 'value' =>  4, 'order' =>  2, 'label' => 'B'],
            ['field' => 'blood_group', 'value' =>  6, 'order' =>  3, 'label' => 'O'],
            ['field' => 'blood_group', 'value' =>  8, 'order' =>  4, 'label' => 'AB'],
            ['field' => 'blood_group', 'value' =>  1, 'order' =>  5, 'label' => 'A Rh-'],
            ['field' => 'blood_group', 'value' =>  3, 'order' =>  6, 'label' => 'B Rh-'],
            ['field' => 'blood_group', 'value' =>  5, 'order' =>  7, 'label' => 'O Rh-'],
            ['field' => 'blood_group', 'value' =>  7, 'order' =>  8, 'label' => 'AB Rh-'],

            // Race and Nation
            ['field' => 'nation', 'value' =>  1, 'order' =>  1, 'label' => 'ไทย'],
            ['field' => 'nation', 'value' =>  2, 'order' =>  2, 'label' => 'จีน'],
            ['field' => 'nation', 'value' =>  3, 'order' =>  3, 'label' => 'พม่า'],
            ['field' => 'nation', 'value' =>  4, 'order' =>  4, 'label' => 'ลาว'],
            ['field' => 'nation', 'value' =>  5, 'order' =>  5, 'label' => 'กัมพูชา'],
            ['field' => 'nation', 'value' =>  6, 'order' =>  6, 'label' => 'มาเลเซีย'],
            ['field' => 'nation', 'value' =>  7, 'order' =>  7, 'label' => 'สิงคโปร์'],
            ['field' => 'nation', 'value' =>  8, 'order' =>  8, 'label' => 'บรูไน'],
            ['field' => 'nation', 'value' =>  9, 'order' =>  9, 'label' => 'ญี่ปุ่น'],
            ['field' => 'nation', 'value' => 10, 'order' => 10, 'label' => 'เซียรา ลีโอน'],

            // Religion
            ['field' => 'religion', 'value' =>  1, 'order' =>  1, 'label' => 'พุทธ'],
            ['field' => 'religion', 'value' =>  2, 'order' =>  2, 'label' => 'อิสลาม'],
            ['field' => 'religion', 'value' =>  3, 'order' =>  3, 'label' => 'คริสต์'],
            ['field' => 'religion', 'value' =>  4, 'order' =>  4, 'label' => 'ฮินดู'],

            // Marital status
            ['field' => 'marital_status', 'value' =>  1, 'order' =>  1, 'label' => 'โสด'],
            ['field' => 'marital_status', 'value' =>  2, 'order' =>  2, 'label' => 'สมรส'],
            ['field' => 'marital_status', 'value' =>  3, 'order' =>  3, 'label' => 'หม้าย'],
            ['field' => 'marital_status', 'value' =>  4, 'order' =>  4, 'label' => 'หย่า'],

            // Career
            ['field' => 'career', 'value' => 0, 'order' => 0, 'label' => 'รับราชการ' ],
            ['field' => 'career', 'value' => 1, 'order' => 1, 'label' => 'ข้าราชการบำนาญ' ],
            ['field' => 'career', 'value' => 2, 'order' => 2, 'label' => 'พนักงานของรัฐ' ],
            ['field' => 'career', 'value' => 3, 'order' => 3, 'label' => 'รัฐวิสาหกิจ' ],
            ['field' => 'career', 'value' => 4, 'order' => 4, 'label' => 'พนักงานเอกชน' ],
            ['field' => 'career', 'value' => 5, 'order' => 5, 'label' => 'ธุรกิจส่วนตัว' ],
            ['field' => 'career', 'value' => 6, 'order' => 6, 'label' => 'ค้าขาย' ],
            ['field' => 'career', 'value' => 7, 'order' => 7, 'label' => 'รับจ้าง' ],
            ['field' => 'career', 'value' => 8, 'order' => 8, 'label' => 'ว่างงาน' ],

            // ['field' => 'xxxx', 'value' => yy, 'order' => zz, 'label' => 'xzyxzy'],
            // ['field' => 'xxxx', 'value' => yy, 'order' => zz, 'label' => 'xzyxzy'],
            // ['field' => 'xxxx', 'value' => yy, 'order' => zz, 'label' => 'xzyxzy'],
        ];

        foreach($items as $item) {
            App\Models\Lists\SelectItem::create($item);
        }
    }
}
