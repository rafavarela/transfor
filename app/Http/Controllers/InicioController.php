<?php namespace transfor\Http\Controllers;

// Modelos
use transfor\Categoria;

use transfor\Http\Requests;
//use Illuminate\Http\Request;

class InicioController extends Controller {

    public function getIndex()
    {
        $categorias = Categoria::all();
        return view('index', compact('categorias'));

        //return view('index');

        //var_dump($categorias);
        //return 'inicio laravel desde InicioController. el modelo categorias intenta obtener datos *';
    }
}
