<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function getJobsApi(){
        $jobs[] =  [ 'id' => 1 , 'name' =>  'รับราชการ'];
        $jobs[] =  [ 'id' => 2 , 'name' => 'พนักงานของรัฐ'];
        $jobs[] =  [ 'id' => 2 , 'name' => 'พนักงานเอกชน'];
        $jobs[] =  [ 'id' => 2 , 'name' => 'ธุรกิจส่วนตัว'];
        $jobs[] =  [ 'id' => 2 , 'name' => 'ค้าขาย'];
        $jobs[] =  [ 'id' => 2 , 'name' => 'รับจ้าง'];
        $jobs[] =  [ 'id' => 2 , 'name' => 'ว่างงาน'];
        $jobs[] =  [ 'id' => 2 , 'name' => 'พนักงานของรัฐ'];
        return $jobs;
    }
}
