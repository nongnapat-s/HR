<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function getJobsApi(){
        $jobs[] =  [ 'id' => 1 , 'name' =>  'รับราชการ'];
        $jobs[] =  [ 'id' => 2 , 'name' => 'พนักงานของรัฐ'];
        $jobs[] =  [ 'id' => 3 , 'name' => 'พนักงานเอกชน'];
        $jobs[] =  [ 'id' => 4 , 'name' => 'ธุรกิจส่วนตัว'];
        $jobs[] =  [ 'id' => 5 , 'name' => 'ค้าขาย'];
        $jobs[] =  [ 'id' => 6 , 'name' => 'รับจ้าง'];
        $jobs[] =  [ 'id' => 7 , 'name' => 'ว่างงาน'];
        $jobs[] =  [ 'id' => 8 , 'name' => 'พนักงานของรัฐ'];
        return $jobs;
    }
}
