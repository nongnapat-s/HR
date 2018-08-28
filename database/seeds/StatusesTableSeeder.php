<?php

use Illuminate\Database\Seeder;

class StatusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $statuses = [
            ['id' =>  1, 'active' => true,  'name' => 'ทั่วไป'],
            ['id' =>  2, 'active' => true,  'name' => 'ยืมตัวสังกัดการพยาบาล'],
            ['id' =>  3, 'active' => true,  'name' => 'ยืมตัวสังกัดงานวิจัย'],
            ['id' =>  4, 'active' => true,  'name' => 'ยืมตัวสังกัดงานผู้อำนวยการ'],
            ['id' =>  5, 'active' => true,  'name' => 'ผู้มีความรู้ความสามารถพิเศษ'],
            ['id' =>  6, 'active' => true,  'name' => 'ที่ปรึกษาคณะฯ ด้านบริหารและกิจการพิเศษ'],
            ['id' =>  7, 'active' => true,  'name' => 'ที่ปรึกษาคณะฯ ด้านวิชาการ'],
            ['id' =>  8, 'active' => true,  'name' => 'ที่ปรึกษาคณะฯ ด้านผู้ถ่ายทอดงานและผู้สืบทอดงาน'],
            ['id' =>  9, 'active' => true,  'name' => 'ที่ปรึกษาคณะฯ ด้านจิตอาสา'],
            ['id' => 10, 'active' => true,  'name' => 'ที่ปรึกษาภาควิชาฯ'],
            ['id' => 11, 'active' => true,  'name' => 'บุคลากรภายนอกภาคฯ'],
            ['id' => 12, 'active' => false, 'name' => 'เกษียณอายุราชการ'],
            ['id' => 13, 'active' => false, 'name' => 'ไม่ต่อสัญญาจ้าง'],
            ['id' => 14, 'active' => false, 'name' => 'ลาออก'],
            ['id' => 15, 'active' => false, 'name' => 'ถูกให้ออก'],
            ['id' => 16, 'active' => false, 'name' => 'ถึงแก่กรรม'],
            ['id' => 17, 'active' => false, 'name' => 'กลับต้นสังกัด (ยืมตัว)'],
            ['id' => 18, 'active' => false, 'name' => 'โอนย้ายออก']
        ];

        foreach ($statuses as $status) {
            App\Status::create($status);
        }
    }
}
