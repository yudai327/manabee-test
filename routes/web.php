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




Route::get('/', 'TopController@index')->name('index');
Route::get('/course', 'CourseController@index')->name('course');
Route::get('/profile', 'ProfileController@index')->name('profile');
Route::get('/userpages', 'UserPageController@index')->name('userpages');
//入力ページ
Route::get('/contacts', 'ContactController@index')->name('contacts.index');
//確認ページ
Route::post('/contacts/confirm', 'ContactController@confirm')->name('contacts.confirm');
//送信完了ページ
Route::post('/contacts/thanks', 'ContactController@thanks')->name('contacts.thanks');

Auth::routes(['verify' => true]);
Route::middleware('verified')->group(function() {
    // 本登録ユーザーだけ表示できるページ
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/home/{page}', 'HomeController@useredit')->name('home.edit');
    Route::post('/home/{page}', 'HomeController@update')->name('home.update');
    // Route::resource('home', 'HomeController',['except' => ['edit']]);

});
