<?php

/*
 * Paginas estaticas
 */
Route::get('/','InicioController@getIndex');
Route::get('nosotros','InicioController@getNosotros');
Route::get('contactenos','InicioController@getContactenos');

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

    Route::get('/','InicioController@getIndex');

    // -- PRODUCTOS (Vitrina del negocio) ------------------------//
    Route::resource('categoria', 'CategoriaController');
    Route::resource('producto', 'ProductoController');
    Route::controller('foto', 'FotoController');

    // -- NOTICIAS (Textos del CMS) ------------------------------//
    Route::resource('cmsseccion', 'CmsSeccionController');
    Route::resource('cmsnoticia', 'CmsNoticiaController');
});
