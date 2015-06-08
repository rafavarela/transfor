<?php namespace transfor\Http\Requests;

use transfor\Http\Requests\Request;

class CreateCmsNoticiaRequest extends Request {

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'titulo'        => 'required|unique:cms_noticias',
            'seccion_id'  => 'required'
        ];
    }

}
