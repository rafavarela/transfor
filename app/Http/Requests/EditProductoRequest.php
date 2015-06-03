<?php namespace App\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Routing\Route;

class EditProductoRequest extends Request {

    /**
     * @var Route
     */
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
            'nombre' => 'required|unique:productos,nombre,' . $this->route->getParameter('producto')
        ];
    }

}
