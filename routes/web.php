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

Route::get('/pepe', function () {
    return view('producto.intermedio');
});

/** WebController */
    Route::get('/', 'WebController@inicio')->name('web.inicio');

/** ProductoController */
    Route::get('/{slug}/productos', 'ProductoController@listado')->name('producto.listado');

    Route::get('{pepe}/pepe/{pepe2}', 'ProductoController@listado')->name('producto.listado');


  