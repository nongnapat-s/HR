<?php

use Illuminate\Database\Seeder;

class ProvincesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return vo
     */
    public function run()
    {
        $provinces = [
            ['id' => 10, 'region' => 1, 'name' => 'กรุงเทพมหานคร'],
            ['id' => 11, 'region' => 1, 'name' => 'สมุทรปราการ'],
            ['id' => 12, 'region' => 1, 'name' => 'นนทบุรี'],
            ['id' => 13, 'region' => 1, 'name' => 'ปทุมธานี'],
            ['id' => 14, 'region' => 1, 'name' => 'พระนครศรีอยุธยา'],
            ['id' => 15, 'region' => 1, 'name' => 'อ่างทอง'],
            ['id' => 16, 'region' => 1, 'name' => 'ลพบุรี'],
            ['id' => 17, 'region' => 1, 'name' => 'สิงห์บุรี'],
            ['id' => 18, 'region' => 1, 'name' => 'ชัยนาท'],
            ['id' => 19, 'region' => 1, 'name' => 'สระบุรี'],
            ['id' => 20, 'region' => 4, 'name' => 'ชลบุรี'],
            ['id' => 21, 'region' => 4, 'name' => 'ระยอง'],
            ['id' => 22, 'region' => 4, 'name' => 'จันทบุรี'],
            ['id' => 23, 'region' => 4, 'name' => 'ตราด'],
            ['id' => 24, 'region' => 4, 'name' => 'ฉะเชิงเทรา'],
            ['id' => 25, 'region' => 4, 'name' => 'ปราจีนบุรี'],
            ['id' => 26, 'region' => 1, 'name' => 'นครนายก'],
            ['id' => 27, 'region' => 4, 'name' => 'สระแก้ว'],
            ['id' => 30, 'region' => 3, 'name' => 'นครราชสีมา'],
            ['id' => 31, 'region' => 3, 'name' => 'บุรีรัมย์'],
            ['id' => 32, 'region' => 3, 'name' => 'สุรินทร์'],
            ['id' => 33, 'region' => 3, 'name' => 'ศรีสะเกษ'],
            ['id' => 34, 'region' => 3, 'name' => 'อุบลราชธานี'],
            ['id' => 35, 'region' => 3, 'name' => 'ยโสธร'],
            ['id' => 36, 'region' => 3, 'name' => 'ชัยภูมิ'],
            ['id' => 37, 'region' => 3, 'name' => 'อำนาจเจริญ'],
            ['id' => 39, 'region' => 3, 'name' => 'หนองบัวลำภู'],
            ['id' => 40, 'region' => 3, 'name' => 'ขอนแก่น'],
            ['id' => 41, 'region' => 3, 'name' => 'อุดรธานี'],
            ['id' => 42, 'region' => 3, 'name' => 'เลย'],
            ['id' => 43, 'region' => 3, 'name' => 'หนองคาย'],
            ['id' => 44, 'region' => 3, 'name' => 'มหาสารคาม'],
            ['id' => 45, 'region' => 3, 'name' => 'ร้อยเอ็ด'],
            ['id' => 46, 'region' => 3, 'name' => 'กาฬสินธุ์'],
            ['id' => 47, 'region' => 3, 'name' => 'สกลนคร'],
            ['id' => 48, 'region' => 3, 'name' => 'นครพนม'],
            ['id' => 49, 'region' => 3, 'name' => 'มุกดาหาร'],
            ['id' => 50, 'region' => 2, 'name' => 'เชียงใหม่'],
            ['id' => 51, 'region' => 2, 'name' => 'ลำพูน'],
            ['id' => 52, 'region' => 2, 'name' => 'ลําปาง'],
            ['id' => 53, 'region' => 2, 'name' => 'อุตรดิตถ์'],
            ['id' => 54, 'region' => 2, 'name' => 'แพร่'],
            ['id' => 55, 'region' => 2, 'name' => 'น่าน'],
            ['id' => 56, 'region' => 2, 'name' => 'พะเยา'],
            ['id' => 57, 'region' => 2, 'name' => 'เชียงราย'],
            ['id' => 58, 'region' => 2, 'name' => 'แม่ฮ่องสอน'],
            ['id' => 60, 'region' => 1, 'name' => 'นครสวรรค์'],
            ['id' => 61, 'region' => 1, 'name' => 'อุทัยธานี'],
            ['id' => 62, 'region' => 1, 'name' => 'กำแพงเพชร'],
            ['id' => 63, 'region' => 1, 'name' => 'ตาก'],
            ['id' => 64, 'region' => 1, 'name' => 'สุโขทัย'],
            ['id' => 65, 'region' => 1, 'name' => 'พิษณุโลก'],
            ['id' => 66, 'region' => 1, 'name' => 'พิจิตร'],
            ['id' => 67, 'region' => 1, 'name' => 'เพชรบูรณ์'],
            ['id' => 70, 'region' => 5, 'name' => 'ราชบุรี'],
            ['id' => 71, 'region' => 5, 'name' => 'กาญจนบุรี'],
            ['id' => 72, 'region' => 1, 'name' => 'สุพรรณบุรี'],
            ['id' => 73, 'region' => 1, 'name' => 'นครปฐม'],
            ['id' => 74, 'region' => 1, 'name' => 'สมุทรสาคร'],
            ['id' => 75, 'region' => 1, 'name' => 'สมุทรสงคราม'],
            ['id' => 76, 'region' => 5, 'name' => 'เพชรบุรี'],
            ['id' => 77, 'region' => 5, 'name' => 'ประจวบคีรีขันธ์'],
            ['id' => 80, 'region' => 6, 'name' => 'นครศรีธรรมราช'],
            ['id' => 81, 'region' => 6, 'name' => 'กระบี่'],
            ['id' => 82, 'region' => 6, 'name' => 'พังงา'],
            ['id' => 83, 'region' => 6, 'name' => 'ภูเก็ต'],
            ['id' => 84, 'region' => 6, 'name' => 'สุราษฎร์ธานี'],
            ['id' => 85, 'region' => 6, 'name' => 'ระนอง'],
            ['id' => 86, 'region' => 6, 'name' => 'ชุมพร'],
            ['id' => 90, 'region' => 6, 'name' => 'สงขลา'],
            ['id' => 91, 'region' => 6, 'name' => 'สตูล'],
            ['id' => 92, 'region' => 6, 'name' => 'ตรัง'],
            ['id' => 93, 'region' => 6, 'name' => 'พัทลุง'],
            ['id' => 94, 'region' => 6, 'name' => 'ปัตตานี'],
            ['id' => 95, 'region' => 6, 'name' => 'ยะลา'],
            ['id' => 96, 'region' => 6, 'name' => 'นราธิวาส'],
            ['id' => 99, 'region' => 0, 'name' => 'Other']
        ];

        foreach ($provinces as $province) {
            App\Models\Lists\Province::create($province);
        }
    }
}
