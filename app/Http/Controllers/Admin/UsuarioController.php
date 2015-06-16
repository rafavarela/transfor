<?php namespace transfor\Http\Controllers\Admin;

// Modelo
use transfor\User;

use transfor\Http\Requests;
use transfor\Http\Controllers\Controller;

use Illuminate\Support\Facades\Request;
use Illuminate\Routing\Redirector;

class UsuarioController extends Controller {

    // Este es el middleware de autenticacion //
    public function __construct()
    {
        $this->middleware('auth');
    }

	public function index()
	{
		$usuarios = User::Paginate(5);
        return view('admin.usuarios.index', compact('usuarios'));
	}


	public function edit($id)
	{
		$usuario = User::findOrFail($id);
        return view('admin.usuarios.edit', compact('usuario'));
	}

	public function update($id)
	{
        $user = User::findOrFail($id);
        $user->fill(Request::all());
        $user->save();

        return redirect()->route('admin.usuario.index');

	}

	public function destroy($id, Request $request)
	{
        //return $id;
        //Categoria::destroy($id);

        $usuario = User::find($id);
        $usuario->delete();

        $message = $usuario->name . ' fue eliminado de la base de datos';

        if ($request->ajax()) {
            return $message;
        }
	}

}
