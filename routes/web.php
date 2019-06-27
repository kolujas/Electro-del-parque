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
    Route::get('/{slug}/productos', 'ProductoController@listado')->name('producto.listado');

    Route::get('/producto/{slug}/{seccion}', 'ProductoController@listado')->name('producto.listado');