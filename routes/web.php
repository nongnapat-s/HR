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

// Route::get('/', function () {
//     return view('welcome');
// });



Route::get('/slide-bar', function () {
    return view('w3-test-slide-bar');
});

Route::get('/fixed', function () {
    return view('w3-test-fixed');
});


Route::get('/test', function () {
    return view('test');
});
