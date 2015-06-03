<?php namespace transfor\Http\Controllers;

// Modelos
use transfor\Categoria;
use transfor\Foto;
use transfor\Producto;

use transfor\Http\Requests;
use transfor\Http\Controllers\Controller;

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
