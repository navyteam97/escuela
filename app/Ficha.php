<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ficha extends Model
{
    protected $table = 'fichas';
    protected $fillable = [
        'descripcion',
        'status',
    ];

    public function formularios()
    {
        return $this->hasMany('App\Formulario');
    }
}
