<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Municipio extends Model
{
    protected $table = 'municipios';
    protected $fillable = [
        'descripcion',
        'status',
        'departamento_id',
    ];

    public function direcciones()
    {
        return $this->hasMany('App\Direccion');
    }



    public function departamento()
    {
        return $this->belongsTo('App\Departamento');
    }
}