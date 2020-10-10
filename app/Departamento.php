<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    protected $table = 'departamentos';
    protected $fillable = [
        'descripcion',
        'status',
        'provincia_id',
    ];

    public function municipios()
    {
        return $this->hasMany('App\Municipio');
    }



    public function provincia()
    {
        return $this->hasMany('App\Provincia');
    }
}
