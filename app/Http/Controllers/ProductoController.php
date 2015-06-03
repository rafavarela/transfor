<?php namespace App\Http\Controllers;

// Modelos
use App\Categoria;
use App\Foto;
use App\Producto;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ProductoController extends Controller {


    public function show($id)
    {
        $producto = Producto::find($id);
        $foto = Foto::where('producto_id', '=', $id)->first();

        //var_dump($producto);
        //return view('producto', ['producto' => $producto]);
        return view('producto', compact('producto', 'foto'));
    }

}
