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

/** CorreoController */
    Route::post('/contactar', 'CorreoController@contactar')->name('correo.contactar');

    Route::post('/preguntar', 'CorreoController@preguntar')->name('correo.preguntar');

    Route::get('/gracias', 'CorreoController@gracias')->name('correo.gracias');

/** ProductoController */
    Route::get('/{tipo_slug}', 'ProductoController@intermedio')->name('producto.intermedio');

    Route::get('/{tipo_slug}/productos', 'ProductoController@listado')->name('producto.listado');

    Route::get('/{tipo_slug}/productos/{marca_slug}', 'ProductoController@listado')->name('producto.listado');

    Route::get('/{tipo_slug}/{categoria}/productos/', 'ProductoController@sublistado')->name('producto.sublistado');  