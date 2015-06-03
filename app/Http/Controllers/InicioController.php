<?php namespace App\Http\Controllers;

// Modelos
use App\Categoria;

use App\Http\Requests;
use Illuminate\Http\Request;

class InicioController extends Controller {

    public function getIndex()
    {
        $categorias = Categoria::all();
        return view('index', compact('categorias'));
    }
}
