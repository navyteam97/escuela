<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cuadra extends Model
{
    protected $table = 'cuadras';
    protected $fillable = [
        'descripcion',
        'status',
    ];

    public function direcciones()
    {
        return $this->hasMany('App\Direccion');
    }
}
