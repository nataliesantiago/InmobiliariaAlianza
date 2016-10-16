<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

/**Route::get('/', function () {
    return view('usuario.inicio');
});**/

Auth::routes();

Route::get('/', 'InicioController@indexInicio');

/**administrador**/
Route::get('home', 'HomeController@index');

Route::get('apartamentos', 'ApartamentosController@indexApartamentos');

Route::get('casas','CasasController@indexCasas');

Route::get('apartaestudios', 'ApartaestudioController@indexApartaestudio');

Route::get('lotes', 'LotesController@indexLotes');

/**usuario**/
Route::get('arriendos', 'ArriendosController@indexArriendos');

Route::get('ventas','VentasController@indexVentas');

Route::get('servicios', 'ServiciosController@indexServicios');

Route::get('acercaDe', 'InicioController@acercaDe');

Route::get('contacto', 'InicioController@contacto');


Route::get('error',function(){
	abort(404);
});