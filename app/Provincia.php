<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provincia extends Model
{
    protected $table = 'provincias';
    protected $fillable = [
        'descripcion',
        'status',
        'pais_id',
    ];

    public function departamentos()
    {
        return $this->hasMany('App\Departamento');
    }



    public function pais()
    {
        return $this->belongsTo('App\Pais');
    }
}
