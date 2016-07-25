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

// Password reset link request routes...
Route::get('password/email', 'Auth\PasswordController@getEmail');
Route::post('password/email', 'Auth\PasswordController@postEmail');

// Password reset routes...
Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset', 'Auth\PasswordController@postReset');
	
Route::get('/', 'IndexController@index');

Route::resource('teacher_call', 'TeacherCallController');

Route::resource('academic_event', 'AcademicEventController');

Route::resource('scientific_magazine', 'ScientificMagazineController');

Route::resource('university', 'UniversityController');

Route::get('/admin', 'IndexController@index');

Route::get('/desactived_admin/{id}', 'UserController@desactived_admin');
Route::get('/actived_admin/{id}', 'UserController@actived_admin');
Route::get('/user/create_docent', 'UserController@create_docent');
Route::get('/user/create_publisher', 'UserController@create_publisher');
Route::get('/desactived_me', 'UserController@desactived_me');
Route::get('/actived_me', 'UserController@actived_me');
Route::resource('user', 'UserController');

Route::get('/search_area/{id}', 'QueriesController@search_area');
Route::post('/result_search_basic', 'QueriesController@result_search_basic');


Route::group(['middleware' => ['web']], function(){
	Route::get('/publication_user/{id}', 'AdminController@get_publications_user');
	Route::get('/own_publications', 'AdminController@ownpublications');
	Route::get('/manage_publications', 'AdminController@managepublications');
	Route::get('/admin/create_docent', 'AdminController@create_docent');
	Route::get('/admin/create_publisher', 'AdminController@create_publisher');
	Route::post('/create_user', 'AdminController@create');
	Route::get('/manage_users', 'AdminController@index');
	Route::resource('area', 'AreaController');
	Route::get('/resetpass', 'IndexController@forget');
	Route::get('/search_advanced', 'QueriesController@search_advanced');
	Route::post('/result_search_advanced', 'QueriesController@result_search_advanced');
});




