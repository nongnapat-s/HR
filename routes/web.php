<?php

/*
|--------------------------------------------------------------------------
| Production Routes
|--------------------------------------------------------------------------
|
*/
Route::get('/get-list/{name}', 'ListController@getList');
Route::get('/get-autocomplete/{name}', 'ListController@getAutocomplete');

/*
|--------------------------------------------------------------------------
| Test Routes
|--------------------------------------------------------------------------
|
 */
Route::get('/create-employee', 'EmployeeController@showMainForm');

Route::get('/test', function(){
//    $data = [ 'name' => 'test' ,
//              'name' => 'php'];
//     return $data;
return view('test');
});

Route::post('/get-user', 'EmployeeController@getUser');