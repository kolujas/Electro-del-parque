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

/** WebController */
    Route::get('/', 'WebController@inicio')->name('web.inicio');

/** ProductoController */
    Route::get('/{tipo_slug}', 'ProductoController@intermedio')->name('producto.intermedio');

    Route::get('/{tipo_slug}/productos', 'ProductoController@listado')->name('producto.listado');

    Route::get('/{tipo_slug}/productos/{categoria}', 'ProductoController@sublistado')->name('producto.sublistado');


  