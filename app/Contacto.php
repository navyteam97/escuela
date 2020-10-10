<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contacto extends Model
{
    protected $table = 'contactos';
    protected $fillable = [
        'telefono',
        'correo',
        'status',
        'direccion_id',
    ];

    public function personas()
    {
        return $this->hasMany('App\Persona');
    }

    public function instituciones()
    {
        return $this->hasMany('App\Institucion');
    }



    public function direccion()
    {
        return $this->belongsTo('App\Direccion');
    }
}
