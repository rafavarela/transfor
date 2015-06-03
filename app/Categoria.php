<?php namespace transfor;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model {

    protected $table      = 'categorias';
    protected $primaryKey = 'id';
    protected $fillable   = array('nombre');

    public function productos()
    {
        return $this->hasMany('transfor\Producto');
    }

}
