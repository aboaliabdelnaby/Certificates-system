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

Route::get('/','loginController@login');

Route::post('login/store','loginController@store');
Route::get('home','loginController@index');
Route::get('main','loginController@user1');
Route::get('home/period','studentsController@getPeriod');
Route::get('home/periodu1','studentsController@getPeriodU1');
Route::get('taadeem','loginController@register');
Route::get('notallowed','studentsController@notAllowed');
Route::get('students','loginController@students');
Route::get('students/show','studentsController@show');
Route::get('students/showu1','studentsController@showU1');
Route::get('students/showdata','studentsController@showData');
Route::get('students/edit/{id}','studentsController@edit');
Route::get('students/edit2/{id}','studentsController@edit2');
Route::get('students/delete','studentsController@destroy');
Route::get('students/search', 'studentsController@search');
Route::get('home/all','studentsController@all');
Route::get('students/ekrar/{id}','studentsController@ekrar');
Route::post('register/store','taadeemController@store');
Route::post('register/update','studentsController@update');
Route::post('register/update2','studentsController@update2');
Route::get('students/deleted','studentsController@deleted');
Route::get('logout','studentsController@logout');