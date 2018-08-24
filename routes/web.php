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
    return view('vue-app')->with(['title' => 'Create employee', 'jsFile' => 'create-employee.js']);
});

Route::post('/get-jobs-api','EmployeeController@getJobsApi');

Route::post('/test-form',function(Illuminate\Http\Request $request){
    return $request->all();
});