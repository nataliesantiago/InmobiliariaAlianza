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
Route::get('/teacher_call', 'IndexController@teacher_call');
Route::get('/academic_event', 'IndexController@academic_event');
Route::get('/scientific_magazine', 'IndexController@scientific_magazine');
