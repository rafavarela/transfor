<?php namespace transfor\Http\Controllers\Admin;

use transfor\Http\Requests\CreateCmsNoticiaRequest;
use transfor\Http\Requests\EditCmsNoticiaRequest;

// Modelo
use transfor\Cmsnoticia;
use transfor\Cmsseccion;

use transfor\Http\Requests;
use transfor\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CmsNoticiaController extends Controller {

    public function index()
    {
        $cmsnoticias = Cmsnoticia::Paginate(10);
        return view('admin.cmsnoticias.index', compact('cmsnoticias'));
    }


    public function create()
    {
        $cmssecciones = ['' => ''] + Cmsseccion::lists('nombre', 'id');
        $datos['cmssecciones'] = $cmssecciones;
        return view('admin.cmsnoticias.create', $datos);
    }

    public function store(CreateCmsNoticiaRequest $request)
    {
        $cmsnoticia = Cmsnoticia::create($request->all());
        return redirect()->route('admin.cmsnoticia.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $cmssecciones = Cmsseccion::lists('nombre', 'id');
        $datos['cmssecciones'] = $cmssecciones;

        $cmsnoticia = Cmsnoticia::findOrFail($id);
        $datos['cmsnoticia'] = $cmsnoticia;

        //dd($datos);

        return view('admin.cmsnoticias.edit', $datos);
    }

    public function update(EditCmsNoticiaRequest $request, $id)
    {
        $cmsnoticia = Cmsnoticia::findOrFail($id);
        $cmsnoticia->fill($request->all());
        $cmsnoticia->save();

        return \Redirect::route('admin.cmsnoticia.index');

    }

    public function destroy($id, Request $request)
    {
        //return $id;
        //Producto::destroy($id);

        $cmsnoticia = Cmsnoticia::find($id);
        $cmsnoticia->delete();

        $message = $cmsnoticia->titulo . ' fue eliminado de la base de datos';

        if ($request->ajax()) {
            return $message;
        }

    }

}
