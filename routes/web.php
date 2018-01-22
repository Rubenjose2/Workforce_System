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

// Route::get('/', function () {
//     return view('custom.login');
// });

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('user-register','userAuthController@showRegisterform')->name('custom.register');
Route::post('user-register','userAuthController@register');

// Dashboard Routes

Route::get('user_edit','userController@show')->name('user-edit');
Route::post('user_edit','userController@update');


// Adminstrator Routes

Route::get('admin','adminControllerPages@show')->name('admin');


//Administrator Messagers Routes

Route::get('/admin/message_create','adminControllerMessages@create')->name('messages.create');



// Route::get('user-login','userAuthController@showLoginform')->name('custom.login');
// Route::post('user-login','userAuthController@login');