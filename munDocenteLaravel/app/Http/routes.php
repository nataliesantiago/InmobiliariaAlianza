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


Route::get('/', 'IndexController@index');
Route::get('/search', 'IndexController@search');
Route::get('/record', 'IndexController@record');
Route::get('/setting_account/{id}', 'IndexController@setting_account');
Route::post('/result_search_basic', 'IndexController@result_search_basic');
Route::post('/result_search_advanced', 'IndexController@result_search_advanced');

Route::resource('teacher_call', 'TeacherCallController');
Route::resource('academic_event', 'AcademicEventController');
Route::resource('scientific_magazine', 'ScientificMagazineController');
Route::auth();

Route::get('/home', 'HomeController@index');
