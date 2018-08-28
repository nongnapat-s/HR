<?php

/*
|--------------------------------------------------------------------------
| Production Routes
|--------------------------------------------------------------------------
|
*/
Route::get('/get-list/{name}', 'ListController@getList');

/*
|--------------------------------------------------------------------------
| Test Routes
|--------------------------------------------------------------------------
|
 */
Route::get('/create-employee', 'EmployeeController@showMainForm');

Route::post('/test-form', function(Illuminate\Http\Request $request) {
    return $request->all();
});