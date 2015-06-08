<?php namespace transfor\Http\Requests;

use transfor\Http\Requests\Request;
use Illuminate\Routing\Route;

class EditCmsSeccionRequest extends Request {

    private $route;

    public function __construct(Route $route)
    {
        $this->route = $route;
    }

	public function authorize()
	{
		return true;
	}

	public function rules()
	{
		return [
            'nombre' => 'required|unique:cms_secciones,nombre,' . $this->route->getParameter('cmsseccion')
		];
	}

}