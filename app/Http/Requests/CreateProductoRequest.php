<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateProductoRequest extends Request {

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'nombre'        => 'required|unique:productos',
            'categoria_id'  => 'required'
        ];
    }

}
