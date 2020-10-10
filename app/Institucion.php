<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Institucion extends Model
{
    protected $table = 'instituciones';
    protected $fillable = [
        'descripcion',
        'status',
        'contacto_id',
    ];

    public function carrerasInstituciones()
    {
        return $this->hasMany('App\CarreraInstitucion');
    }



    public function contacto()
    {
        return $this->belongsTo('App\Contacto');
    }
}
