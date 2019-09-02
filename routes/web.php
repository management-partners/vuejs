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
// viewを表示されます
Route::group(['namespace' => 'Admin', 'middleware' =>['api']], function(){
     Route::get('/{any?}', function() {
    return view('admin.index'); // thay vào file blade ở đó khai báo app Vue của bạn, mình giả sử ở đây là file app.blade.php
})->where('any', '^(.*)\/?$');
     // // メイン画面
     // Route::get('/admin', function () {
     //     return view('admin.index');
     // });
     //
     // // 言語リストの画面
     // Route::get('/admin/lang', function () {
     //     return view('admin.index');
     // });
     // // 言語追加の画面
     // Route::get('/admin/lang/create', function () {
     //     return view('admin.index');
     // });
     // // 言語編集の画面
     // Route::get('/admin/lang/edit', function () {
     //     return view('admin.index');
     // });
     //
     // // ユーザー画面
     // Route::get('/admin/user', function () {
     //     return view('admin.index');
     // });
     // // ユーザー追加の画面
     // Route::get('/admin/user/create', function () {
     //     return view('admin.index');
     // });
     // // ユーザー編集の画面
     // Route::get('/admin/user/edit', function () {
     //     return view('admin.index');
     // });
});
