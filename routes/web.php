<?php

/*
|--------------------------------------------------------------------------
| Production Routes
|--------------------------------------------------------------------------
|
*/

Route::get('/get-list/{name}', 'ListController@getList');
Route::get('/get-autocomplete/{name}', 'ListController@getDevbridgeAutocomplete');



/*
|--------------------------------------------------------------------------
| Test Routes Peck Palitchoke
|--------------------------------------------------------------------------
|
 */


Route::get('/create-employee', 'EmployeeController@showMainForm');

Route::post('/get-user', 'EmployeeController@getUser');

Route::get('/',function(){
    return view('test');
});

Route::post('/test-form',function(Illuminate\Http\Request $request){
    return $request->all();
});

Route::get('/test-component', function() {
    return view('vue-app')->with([
        'title' => 'Test Zone',
        'jsFile' => 'test-component.js',
    ]);
});