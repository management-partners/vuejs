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

Route::get('/', function () {
    return view('users.index');
});
// Route::resource('api/user/lang', 'User\LanguageController');

Route::group(['namespace' => 'Admin', 'middleware' =>['web']], function(){
     Route::get('/admin', function () {
         return view('admin.index');
     });
       Route::apiResource('admin/lang', 'AdminMstLanguageController');
       Route::apiResource('admin/user', 'AdminMstUserController');
});
