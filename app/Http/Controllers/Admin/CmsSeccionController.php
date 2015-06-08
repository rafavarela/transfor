<?php namespace transfor\Http\Controllers\Admin;


use transfor\Http\Requests\CreateCmsSeccionRequest;
use transfor\Http\Requests\EditCmsSeccionRequest;

// Modelo
use transfor\Cmsseccion;

use transfor\Http\Requests;
use transfor\Http\Controllers\Controller;

use Illuminate\Http\Request;


class CmsSeccionController extends Controller {

	public function index()
	{

		$cmssecciones = Cmsseccion::Paginate(5);
        //var_dump($cmssecciones);
        return view('admin.cmssecciones.index', compact('cmssecciones'));

        //return 'Listado de secciones del cms';
	}

	public function create()
	{
		return view('admin.cmssecciones.create');
	}

	public function store(CreateCmsSeccionRequest $request)
	{
        $cmssecciones = Cmsseccion::create($request->all());
        return redirect()->route('admin.cmsseccion.index');
	}

	public function show($id)
	{
		//
	}

	public function edit($id)
	{
        $cmsseccion = Cmsseccion::findOrFail($id);
        //var_dump($cmsseccion);
        return view('admin.cmssecciones.edit', compact('cmsseccion'));
	}

	public function update(EditCmsSeccionRequest $request, $id)
	{
        $cmsseccion = Cmsseccion::findOrFail($id);
        $cmsseccion->fill($request->all());
        $cmsseccion->save();

        return \Redirect::route('admin.cmsseccion.index');

	}


	public function destroy($id, Request $request)
	{
        //return $id;
        //Categoria::destroy($id);

        $cmsseccion = Cmsseccion::find($id);
        $cmsseccion->delete();

        $message = $cmsseccion->nombre . ' fue eliminado de la base de datos';

        if ($request->ajax()) {
            return $message;
        }

	}

}
