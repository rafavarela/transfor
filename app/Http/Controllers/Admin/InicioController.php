<?php namespace transfor\Http\Controllers\Admin;

use transfor\Http\Requests;
use transfor\Http\Controllers\Controller;

class InicioController extends Controller {

    public function getIndex()
    {
        return view('admin.index');
    }

}