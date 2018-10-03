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
| Test Routes Peck Palitchoke
|--------------------------------------------------------------------------
|
 */


Route::get('/create-employee', 'EmployeeController@showMainForm');

Route::post('/get-user', 'EmployeeController@getUser');