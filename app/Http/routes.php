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
Route::group(array('prefix' => 'v1.1'), function(){

	Route::resource('vehiculos','VehiculosController', ['only' => ['index', 'show']]);
Route::resource('fabricantes', 'FabricantesController', ['except' => ['edit', 'show']]);
Route::resource('fabricantes.vehiculos', 'FabricanteVehiculosController', ['except' => ['show','edit','create']]);

});

Route::pattern('inexistentes', '.*');

Route::any('/{inexistentes}', function(){

  return response()->json(['mensaje' => 'Ruta y/o metodos incorrectos', 'codigo' => 400], 400);
});