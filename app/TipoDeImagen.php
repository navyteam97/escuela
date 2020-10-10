<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoDeImagen extends Model
{
    protected $table = 'tipos_de_imagenes';
    protected $fillable = [
        'descripcion',
        'status',
    ];

    public function imagenes()
    {
        return $this->hasMany('App\Imagen');
    }
}
