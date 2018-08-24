<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function showMainForm() {
        return view('vue-app')->with([
            'title' => 'Create employee',
            'jsFile' => 'create-employee.js',
            'data' =>
                [
                    'jobs' =>
                        [
                        ['id' => 1, 'name' => 'รับราชการ'],
                        ['id' => 2, 'name' => 'พนักงานของรัฐ'],
                        ['id' => 3, 'name' => 'พนักงานเอกชน'],
                        ['id' => 4, 'name' => 'ธุรกิจส่วนตัว'],
                        ['id' => 5, 'name' => 'ค้าขาย'],
                        ['id' => 6, 'name' => 'รับจ้าง'],
                        ['id' => 7, 'name' => 'ว่างงาน'],
                        ['id' => 8, 'name' => 'พนักงานของรัฐ'],
                    ]
                ]
        ]);
    }
}
