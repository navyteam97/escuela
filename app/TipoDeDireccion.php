<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoDeDireccion extends Model
{
    protected $table = 'tipos_de_direcciones';
    protected $fillable = [
        'descripcion',
        'status',
    ];

    public function direcciones()
    {
        return $this->hasMany('App\Direccion');
    }
}
