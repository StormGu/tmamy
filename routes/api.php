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


  /*---------------------  Protected  ---------------------*/
Route::group(['middleware' => ['jwt.auth']], function () {
    Route::post('store', 'StoreController@store'); 
    Route::post('PostAdv', 'AdsController@store');

    Route::get('profile/{id}', 'UserProfileController@showProfile');	
 	Route::post('profile/Message', 'MessageController@postmsg');
 	Route::get('profile/Message', 'MessageController@messages');
    Route::get('profile/Message/{id}', 'MessageController@getmsg');
    Route::get('profile/advertisements', 'UserProfileController@advertisements');
    Route::get('profile/stores', 'UserProfileController@stores');
    Route::get('profile/me', 'UserProfileController@me');
    Route::post('profile/editProfile', 'UserProfileController@updateProfile');
    Route::post('profile/editPassword', 'UserProfileController@updateUserPassword');
    Route::post('profile/editSocial', 'UserProfileController@updateSocial');
    Route::post('profile/follow', 'UserProfileController@follow');
    Route::post('profile/unfollow', 'UserProfileController@unfollow');
    Route::post('profile/upgrade', 'UserProfileController@updateUpgrade');
    Route::post('store/likeStore', 'StoreController@likeStore');
    Route::post('store/dislikeStore', 'StoreController@disLikeStore');
    Route::post('store/SubscribeStore', 'StoreController@SubscribeStore');
    Route::post('store/disSubscribeStore', 'StoreController@disSubscribeStore');
 

    });


});



 // messages + store : follow (subscription) + like  
 // user_id +  store_id to follow

    Route::get('ism', function () {
      return bcrypt(123456);
    });

