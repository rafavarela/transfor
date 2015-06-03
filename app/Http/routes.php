<?php

/*
 * Paginas estaticas
 */
Route::get('/','InicioController@getIndex');
/*
Route::get('/',function(){
    return 'inicio laravel';
});
*/

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);

/*
 * Rutas para paginas dinamicas publicas
 */

Route::resource('categoria', 'CategoriaController');
Route::resource('producto', 'ProductoController');


/*
 * Rutas para paginas dinamicas administrativas
 */

Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function(){
    Route::resource('categoria', 'CategoriaController');
    Route::resource('producto', 'ProductoController');
    Route::controller('foto', 'FotoController');
});
