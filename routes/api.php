<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Rutas sucursal
Route::get('/sucursales','App\Http\Controllers\sucursalController@index');
Route::post('/sucursales','App\Http\Controllers\sucursalController@store');
Route::put('/sucursales/{id}','App\Http\Controllers\sucursalController@update');
Route::delete('/sucursales/{id}','App\Http\Controllers\sucursalController@destroy');

//Rutas pizza_det
Route::get('/pizzas_det','App\Http\Controllers\pizza_det_Controller@index');
Route::post('/pizzas_det','App\Http\Controllers\pizza_det_Controller@store');
Route::put('/pizzas_det/{id}','App\Http\Controllers\pizza_det_Controller@update');
Route::delete('/pizzas_det/{id}','App\Http\Controllers\pizza_det_Controller@destroy');

//Rutas ingrediente
Route::get('/ingredientes','App\Http\Controllers\ingredienteController@index');
Route::post('/ingredientes','App\Http\Controllers\ingredienteController@store');
Route::put('/ingredientes/{id}','App\Http\Controllers\ingredienteController@update');
Route::delete('/ingredientes/{id}','App\Http\Controllers\ingredienteController@destroy');

//Rutas ingrediente_predeterminado
Route::get('/ingredientes_predeterminados','App\Http\Controllers\ingrediente_predeterminado_Controller@index');
Route::post('/ingredientes_predeterminados','App\Http\Controllers\ingrediente_predeterminado_Controller@store');
Route::put('/ingredientes_predeterminados/{id}','App\Http\Controllers\ingrediente_predeterminado_Controller@update');
Route::delete('/ingredientes_predeterminados/{id}','App\Http\Controllers\ingrediente_predeterminado_Controller@destroy');

//Rutas pedido
Route::get('/pedidos','App\Http\Controllers\pedidoController@index');
Route::post('/pedidos','App\Http\Controllers\pedidoController@store');
Route::put('/pedidos/{id}','App\Http\Controllers\pedidoController@update');
Route::delete('/pedidos/{id}','App\Http\Controllers\pedidoController@destroy');

//Rutas detalle_pedido
Route::get('/detalles_pedido','App\Http\Controllers\detalle_pedidoController@index');
Route::post('/detalles_pedido','App\Http\Controllers\detalle_pedidoController@store');
Route::put('/detalles_pedido/{id}','App\Http\Controllers\detalle_pedidoController@update');
Route::delete('/detalles_pedido/{id}','App\Http\Controllers\detalle_pedidoController@destroy');
