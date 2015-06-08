<?php namespace transfor\Http\Controllers;

// Modelos
use transfor\Categoria;
use transfor\Cmsnoticia;

use transfor\Http\Requests;
//use Illuminate\Http\Request;

class InicioController extends Controller {

    public function getIndex()
    {
        $categorias = Categoria::all();
        return view('index', compact('categorias'));
    }

    public function getNosotros()
    {
        $result = \DB::table('cms_secciones')
            ->select('id')
            ->where('nombre', 'NOSOTROS')
            ->get();

        if (isset($result[0]->id)){
            $idCategoria = $result[0]->id;
            //echo $idCategoria;
            //$cmsnoticias = Cmsnoticia::findOrFail($idCategoria);

            $cmsnoticias = Cmsnoticia::where('seccion_id', '=', $idCategoria)->get();
            //dd($cmsnoticias);

            return view('nosotros', compact('cmsnoticias'));
        }
    }

    public function getContactenos()
    {
        return view('contactenos');
        // return 'contactenos';
    }
}
