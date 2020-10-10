<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genero extends Model
{
    protected $table = 'generos';
    protected $fillable = [
        'descripcion',
        'status',
    ];

    public function personas()
    {
        return $this->hasMany('App\Persona');
    }
}
