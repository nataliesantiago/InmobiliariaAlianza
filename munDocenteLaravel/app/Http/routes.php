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



Route::auth();
	
Route::get('/', 'IndexController@index');

Route::resource('teacher_call', 'TeacherCallController');

Route::resource('academic_event', 'AcademicEventController');

Route::resource('scientific_magazine', 'ScientificMagazineController');

Route::get('/user/create_docent', 'UserController@create_docent');
Route::get('/user/create_publisher', 'UserController@create_publisher');
Route::resource('user', 'UserController');

Route::post('/result_search_basic', 'QueriesController@result_search_basic');


Route::group(['middleware' => ['web']], function(){
	
	Route::resource('area', 'AreaController');
	Route::get('/resetpass', 'IndexController@forget');
	Route::get('/search_advanced', 'QueriesController@search_advanced');
	Route::post('/result_search_advanced', 'QueriesController@result_search_advanced');

});




