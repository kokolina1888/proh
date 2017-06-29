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

Route::get('/', 'QuizzController@index')->name('home');

Route::get('set-one', 'QuizzController@set_one')->name('set_one');
Route::post('set-one', 'QuizzController@res_set_one')->name('res_set_one');

Route::get('set-two', 'QuizzController@set_two')->name('set_two');
Route::post('set-two', 'QuizzController@res_set_two')->name('res_set_two');

Route::get('set-three', 'QuizzController@set_three')->name('set_three');
Route::post('set-three', 'QuizzController@res_set_three')->name('res_set_three');

Route::get('set-four', 'QuizzController@set_four')->name('set_four');
Route::post('set-four', 'QuizzController@res_set_four')->name('res_set_four');

Route::get('set-five', 'QuizzController@set_five')->name('set_five');
Route::post('set-five', 'QuizzController@res_set_five')->name('res_set_five');

Route::get('set-six', 'QuizzController@set_six')->name('set_six');
Route::post('set-six', 'QuizzController@res_set_six')->name('res_set_six');

//route to display user info form
Route::get('user-info', 'UserController@create')->name('user_info');

//route to store user info 
Route::post('user-info', 'UserController@store')->name('user_info_store');


