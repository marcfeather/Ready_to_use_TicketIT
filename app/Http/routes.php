<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('login', 'Auth\AuthController@showLoginForm');
Route::post('login', 'Auth\AuthController@login');
Route::get('logout', 'Auth\AuthController@logout');

Route::get('tickets-admin/users/register',  ['as'=>'register','uses'=>'Auth\AuthController@showRegistrationForm','middleware' => ['auth' , 'admin']]);
Route::post('tickets-admin/users/register', 'Auth\AuthController@postRegister');

Route::get('tickets-admin/users/password/reset',  ['as'=>'passwordReset','uses'=>'Auth\PasswordController@showResetForm','middleware' => ['auth' , 'admin']]);
Route::get('tickets-admin/users/password/reset/{token?}' , 'Auth\PasswordController@showResetForm');
Route::post('tickets-admin/users/password/email', 'Auth\PasswordController@sendResetLinkEmail');
Route::post('tickets-admin/users/password/reset', 'Auth\PasswordController@reset');

Route::get('/', ['as'=>'user','uses'=>'HomeController@index']);
Route::resource('tickets-admin/users', 'UserController');






