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



Route::get('areas','GeneralController@showArea');
Route::get('lugares','GeneralController@showPlace');
Route::get('institucion','GeneralController@showAcademic');
Route::get('usuarios', 'GeneralController@showUser');
Route::get('publicaciones','GeneralController@showPublication');

Route::get('todasareas', function(){
	return view('todasareas');
});