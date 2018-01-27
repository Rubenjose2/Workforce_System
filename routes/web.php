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
Route::get('user-post','showMessangerForm@postlist');


// Adminstrator Routes

Route::get('admin','adminControllerPages@show')->name('admin');


//Administrator Messagers Routes

Route::resource('admin/posts', 'adminControllerMessages');
Route::get('admin/post_form','showMessangerForm@show')->name('postform.show');
Route::get('admin/postshow','showMessangerForm@showPost');
Route::get('updatepost','showMessangerForm@userUpdatePost');
//TEST//
Route::get('post/{id}','showMessangerForm@usertest');


//User Admins site managements

Route::get('admin/user','userController@userlist')->name('user.list');
Route::get('admin/user/view/{id}','userController@userview');
Route::post('admin/user/view/{id}','userController@userAdminedit')->name('userAdminUpdate');

