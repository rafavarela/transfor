<?php namespace transfor;

use Illuminate\Database\Eloquent\Model;

class Foto extends Model {

    protected $table      = 'fotos';
    protected $primaryKey = 'id';
    protected $fillable   = array('imagen','producto_id');

    public function productos()
    {
        return $this->belongsTo('transfor\Producto');
    }

}
