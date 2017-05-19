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


Route::group(['namespace' => 'Api\V1','prefix' => 'v1'], function () {

Route::get('document', 'StoreController@document');
Route::get('getallads', 'AdsController@index');
Route::get('getads/{id}', 'AdsController@show'); // self + images + user
Route::get('getmaincategorise', 'CategoriseController@index');
Route::get('getadvabsedcategorise/{id}', 'CategoriseController@show');
Route::get('getallstore', 'StoreController@index');
Route::get('getstore/{id}', 'StoreController@show'); 

//
Route::get('getadsbasedcat', 'AdsController@getadsbasedcat');

 
Route::post('signup','AuthController@SignUp');
Route::post('login', 'AuthController@authenticate');

 // messages + store : follow (subscription) + like  
 // user_id +  store_id to follow

	Route::get('ism', function () {
      return bcrypt(123456);
 	});

Route::group(['middleware' => ['jwt.auth']], function () {
 	
 	Route::post('profile/Message', 'MessageController@postmsg');
 	Route::get('profile/Message', 'MessageController@messages');
    Route::get('profile/Message/{id}', 'MessageController@getmsg');
    Route::get('profile/advertisements', 'UserProfileController@advertisements');
    Route::get('profile/stores', 'UserProfileController@stores');


    });


});