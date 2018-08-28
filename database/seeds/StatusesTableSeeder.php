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
            ['id' =>  1, 'active' => true,  'category' => 'regular',    'name' => 'ทั่วไป'],
            ['id' =>  2, 'active' => true,  'category' => 'assistant',  'name' => 'ยืมตัวสังกัดการพยาบาล'],
            ['id' =>  3, 'active' => true,  'category' => 'assistant',  'name' => 'ยืมตัวสังกัดงานวิจัย'],
            ['id' =>  4, 'active' => true,  'category' => 'assistant',  'name' => 'ยืมตัวสังกัดงานผู้อำนวยการ'],
            ['id' =>  5, 'active' => true,  'category' => 'regular',    'name' => 'ผู้มีความรู้ความสามารถพิเศษ'],
            ['id' =>  6, 'active' => true,  'category' => 'consultant', 'name' => 'ที่ปรึกษาคณะฯ ด้านบริหารและกิจการพิเศษ'],
            ['id' =>  7, 'active' => true,  'category' => 'consultant', 'name' => 'ที่ปรึกษาคณะฯ ด้านวิชาการ'],
            ['id' =>  8, 'active' => true,  'category' => 'consultant', 'name' => 'ที่ปรึกษาคณะฯ ด้านผู้ถ่ายทอดงานและผู้สืบทอดงาน'],
            ['id' =>  9, 'active' => true,  'category' => 'consultant', 'name' => 'ที่ปรึกษาคณะฯ ด้านจิตอาสา'],
            ['id' => 10, 'active' => true,  'category' => 'consultant', 'name' => 'ที่ปรึกษาภาควิชาฯ'],
            ['id' => 11, 'active' => true,  'category' => 'regular',    'name' => 'บุคลากรภายนอกภาคฯ'],
            ['id' => 12, 'active' => false, 'category' => 'regular',    'name' => 'เกษียณอายุราชการ'],
            ['id' => 13, 'active' => false, 'category' => 'regular',    'name' => 'ไม่ประสงค์ต่อสัญญาจ้าง'],
            ['id' => 14, 'active' => false, 'category' => 'regular',    'name' => 'ไม่เสนอต่อสัญญาจ้าง'],
            ['id' => 15, 'active' => false, 'category' => 'regular',    'name' => 'ลาออก'],
            ['id' => 16, 'active' => false, 'category' => 'regular',    'name' => 'ถูกให้ออก'],
            ['id' => 17, 'active' => false, 'category' => 'regular',    'name' => 'ถึงแก่กรรม'],
            ['id' => 18, 'active' => false, 'category' => 'assistant',  'name' => 'กลับต้นสังกัด (ยืมตัว)'],
            ['id' => 19, 'active' => false, 'category' => 'regular',    'name' => 'โอนย้ายออก']
        ];

        foreach ($statuses as $status) {
            App\Status::create($status);
        }
    }
}
