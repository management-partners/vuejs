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
//
// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::group(['namespace' => 'User', 'middleware' =>['api']], function(){
  Route::apiResource('user/lang', 'MstLanguageController');
});
Route::group(['namespace' => 'Admin', 'middleware' =>['api']], function(){
  Route::apiResource('admin/lang', 'AdminMstLanguageController');
  Route::apiResource('admin/user', 'AdminMstUserController');
  Route::post('admin/user/sendEmail', 'AdminMstUserController@sendEmailRegister');
});

// Route::group(['prefix' => 'admin', 'namespace' => 'Admin','middleware' =>['api']], function(){
//   Route::apiResource('photos', 'PhotoController');
// });
