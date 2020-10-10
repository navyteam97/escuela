<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barrio extends Model
{
    protected $table = 'barrios';
    protected $fillable = [
        'descripcion',
        'status',
    ];

    public function direcciones()
    {
        return $this->hasMany('App\Direccion');
    }
}
