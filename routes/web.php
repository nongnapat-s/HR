<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/slide-bar', function () {
//     return view('w3-test-slide-bar');
// });

// Route::get('/fixed', function () {
//     return view('w3-test-fixed');
// });

// Route::get('/test', function () {
//     return view('test');
// });

Route::get('/create-employee',function() {
    return view('vue-app')->with([
        'title' => 'Create employee', 
        'jsFile' => 'create-employee.js',
        'data' => [
            'jobs' =>
            [
                [ 'id' => 1 , 'name' =>  'รับราชการ'],
                [ 'id' => 2 , 'name' => 'พนักงานของรัฐ'],
                [ 'id' => 3 , 'name' => 'พนักงานเอกชน'],
                [ 'id' => 4 , 'name' => 'ธุรกิจส่วนตัว'],
                [ 'id' => 5 , 'name' => 'ค้าขาย'],
                [ 'id' => 6 , 'name' => 'รับจ้าง'],
                [ 'id' => 7 , 'name' => 'ว่างงาน'],
                [ 'id' => 8 , 'name' => 'พนักงานของรัฐ'],
            ]
        ]
        ]);
});

Route::post('/get-jobs-api','EmployeeController@getJobsApi');

Route::post('/test-form',function(Illuminate\Http\Request $request){
    return $request->all();
});