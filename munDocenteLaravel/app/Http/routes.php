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

Route::get('/teacher_call/edit_teacher', 'TeacherCallController@edit_teacher');
Route::resource('teacher_call', 'TeacherCallController');

Route::get('/academic_event/edit_event', 'AcademicEventController@edit_event');
Route::resource('academic_event', 'AcademicEventController');

Route::get('/scientific_magazine/edit_magazine', 'ScientificMagazineController@edit_magazine');
Route::resource('scientific_magazine', 'ScientificMagazineController');

Route::get('/admin', 'IndexController@index');

Route::get('/user/create_docent', 'UserController@create_docent');
Route::get('/user/create_publisher', 'UserController@create_publisher');
Route::get('/desactived_me', 'UserController@desactived_me');
Route::get('/actived_me', 'UserController@actived_me');
Route::resource('user', 'UserController');

Route::post('/result_search_basic', 'QueriesController@result_search_basic');


Route::group(['middleware' => ['web']], function(){

	Route::get('/manage_ownpublication', 'IndexController@ownpublication');
	
	Route::resource('area', 'AreaController');
	Route::get('/resetpass', 'IndexController@forget');
	Route::get('/search_advanced', 'QueriesController@search_advanced');
	Route::post('/result_search_advanced', 'QueriesController@result_search_advanced');
});




