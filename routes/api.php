<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('tracker', 'API\ShippmentController@tracker');

Route::group(['middleware'=>'auth:api'], function (){
    Route::apiResources(['user' => 'API\UserController']);
    Route::apiResources(['shippment' => 'API\ShippmentController']);
    Route::apiResources(['info' => 'API\InfoController']);
    Route::get('profile', 'API\ProfileController@setting');
    // Route::get('tracker', 'API\ShippmentController@tracker');
    Route::put('profile', 'API\ProfileController@update');
});


// Route::apiResources(['user' => 'API\UserController']);

// Route::get('profile', 'API\ProfileController@profile');
// // Route::apiResources(['profile' => 'API\ProfileController']);

