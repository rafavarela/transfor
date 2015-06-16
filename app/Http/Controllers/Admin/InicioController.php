<?php namespace transfor\Http\Controllers\Admin;

use transfor\Http\Requests;
use transfor\Http\Controllers\Controller;

class InicioController extends Controller {

    // Este es el middleware de autenticacion //
    public function __construct()
    {
        $this->middleware('auth');
    }
    // -------------------------------------- //

    public function getIndex()
    {
        return view('admin.index');
    }

}