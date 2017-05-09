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
Route::get('v1/getallcompany', 'Api\V1\CompanyController@index');
Route::get('v1/getcompany/{id}', 'Api\V1\CompanyController@show');
Route::get('v1/getmaincategorise', 'Api\V1\CategoriseController@index');
Route::get('v1/getadvabsedcategorise/{id}', 'Api\V1\CategoriseController@show');
Route::get('v1/getallstore', 'Api\V1\StoreController@index');
Route::get('v1/getstore/{id}', 'Api\V1\StoreController@show');