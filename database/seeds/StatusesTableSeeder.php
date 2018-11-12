<?php

use App\Models\Lists\Status;
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
        DB::statement('SET foreign_key_checks=0');
        Status::truncate();
        DB::statement('SET foreign_key_checks=1');

        $statuses = [
            // ['id' =>  1, 'active' => true,  'category' => 'regular',    'name' => '[ปฏิบัติงาน] ตำแหน่งใหม่'],
            // ['id' =>  2, 'active' => true,  'category' => 'assistant',  'name' => 'ยืมตัวสังกัดการพยาบาล'],
            // ['id' =>  3, 'active' => true,  'category' => 'assistant',  'name' => 'ยืมตัวสังกัดงานวิจัย'],
            // ['id' =>  4, 'active' => true,  'category' => 'assistant',  'name' => 'ยืมตัวสังกัดงานผู้อำนวยการ'],
            // ['id' =>  5, 'active' => true,  'category' => 'regular',    'name' => 'ผู้มีความรู้ความสามารถพิเศษ'],
            // ['id' =>  6, 'active' => true,  'category' => 'consultant', 'name' => 'ที่ปรึกษาคณะฯ ด้านบริหารและกิจการพิเศษ'],
            // ['id' =>  7, 'active' => true,  'category' => 'consultant', 'name' => 'ที่ปรึกษาคณะฯ ด้านวิชาการ'],
            // ['id' =>  8, 'active' => true,  'category' => 'consultant', 'name' => 'ที่ปรึกษาคณะฯ ด้านผู้ถ่ายทอดงานและผู้สืบทอดงาน'],
            // ['id' =>  9, 'active' => true,  'category' => 'consultant', 'name' => 'ที่ปรึกษาคณะฯ ด้านจิตอาสา'],
            // ['id' => 10, 'active' => true,  'category' => 'consultant', 'name' => 'ที่ปรึกษาภาควิชาฯ'],
            // ['id' => 11, 'active' => true,  'category' => 'regular',    'name' => 'บุคลากรภายนอกภาคฯ'],
            // ['id' => 12, 'active' => false, 'category' => 'regular',    'name' => 'เกษียณอายุราชการ'],
            // ['id' => 13, 'active' => false, 'category' => 'regular',    'name' => 'ไม่ประสงค์ต่อสัญญาจ้าง'],
            // ['id' => 14, 'active' => false, 'category' => 'regular',    'name' => 'ไม่เสนอต่อสัญญาจ้าง'],
            // ['id' => 15, 'active' => false, 'category' => 'regular',    'name' => 'ลาออก'],
            // ['id' => 16, 'active' => false, 'category' => 'regular',    'name' => 'ถูกให้ออก'],
            // ['id' => 17, 'active' => false, 'category' => 'regular',    'name' => 'ถึงแก่กรรม'],
            // ['id' => 18, 'active' => false, 'category' => 'assistant',  'name' => 'กลับต้นสังกัด (ยืมตัว)'],
            // ['id' => 19, 'active' => false, 'category' => 'regular',    'name' => 'โอนย้ายออก'],

            ['id' => 1, 'active' => true, 'category' => 'ตำแหน่งใหม่', 'name' => '[ปฏิบัติงาน] ตำแหน่งใหม่'],
            ['id' => 2, 'active' => true, 'category' => 'ตำแหน่งทดแทน', 'name' => '[ปฏิบัติงาน] ตำแหน่งทดแทนผู้พ้นสภาพ'],
            ['id' => 3, 'active' => true, 'category' => 'ตำแหน่งทดแทน', 'name' => '[ปฏิบัติงาน] ตำแหน่งทดแทนผู้พ้นสภาพล่วงหน้า'],
            ['id' => 4, 'active' => true, 'category' => 'ตำแหน่งทดแทน', 'name' => '[ปฏิบัติงาน] ตำแหน่งทดแทนผู้บริหาร'],
            ['id' => 5, 'active' => true, 'category' => 'ยืมตัว', 'name' => '[ปฏิบัติงาน] ยืมตัว'],
            ['id' => 6, 'active' => true, 'category' => 'ผู้มีความรู้ความสามารถพิเศษ', 'name' => '[ปฏิบัติงาน] ผู้มีความรู้ความสามารถพิเศษ'],
            ['id' => 7, 'active' => true, 'category' => 'ที่ปรึกษาคณะ', 'name' => '[ปฏิบัติงาน] ที่ปรึกษาคณะประเภทที่ 1  ด้านบริหารและกิจการพิเศษ (ไม่รับค่าตอบแทน)'],
            ['id' => 8, 'active' => true, 'category' => 'ที่ปรึกษาคณะ', 'name' => '[ปฏิบัติงาน] ที่ปรึกษาคณะประเภทที่ 2 ด้านวิชาการ (รับค่าตอบแทน)'],
            ['id' => 9, 'active' => true, 'category' => 'ที่ปรึกษาคณะ', 'name' => '[ปฏิบัติงาน] ที่ปรึกษาคณะประเภทที่ 3 ด้านผู้ถ่ายทอดงาน และผู้สืบทอดงาน (รับค่าตอบแทน)'],
            ['id' => 10, 'active' => true, 'category' => 'ที่ปรึกษาคณะ', 'name' => '[ปฏิบัติงาน] ที่ปรึกษาคณะประเภทที่ 4 ด้านจิตอาสา (ไม่รับค่าตอบแทน)'],
            ['id' => 11, 'active' => true, 'category' => 'ที่ปรึกษาภาควิชาฯ', 'name' => '[ปฏิบัติงาน] ที่ปรึกษาภาควิชาฯ'],
            ['id' => 12, 'active' => true, 'category' => 'บุคลากรภายนอกภาควิชาฯ', 'name' => '[ปฏิบัติงาน] บุคลากรภายนอกภาควิชาฯ'],
            ['id' => 13, 'active' => false, 'category' => 'เกษียณอายุราชการ', 'name' => '[พ้นสภาพ] เกษียณอายุราชการ'],
            ['id' => 14, 'active' => false, 'category' => 'ไม่ต่อสัญญาจ้าง', 'name' => '[พ้นสภาพ] ไม่ต่อสัญญาจ้าง'],
            ['id' => 15, 'active' => false, 'category' => 'ลาออก', 'name' => '[พ้นสภาพ] ลาออก'],
            ['id' => 16, 'active' => false, 'category' => 'ถูกให้ออก', 'name' => '[พ้นสภาพ] ถูกให้ออก'],
            ['id' => 17, 'active' => false, 'category' => 'ถึงแก่กรรม', 'name' => '[พ้นสภาพ] ถึงแก่กรรม'],
            ['id' => 18, 'active' => false, 'category' => 'กลับต้นสังกัด (ยืมตัว)', 'name' => '[พ้นสภาพ] กลับต้นสังกัด (ยืมตัว)'],
        ];

        foreach ($statuses as $status) {
            Status::create($status);
        }
    }
}
