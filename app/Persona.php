<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    protected $table = 'personas';
    protected $fillable = [
        'user_id',
        'apellido',
        'nombre',
        'nacimiento',
        'status',
        'genero_id',
        'contacto_id',
        'documento_id',
    ];

    public function imagenes()
    {
        return $this->hasMany('App\Imagen');
    }

    public function responsables()
    {
        return $this->hasMany('App\Responsable');
    }



    public function contacto()
    {
        return $this->belongsTo('App\Contacto');
    }

    public function documento()
    {
        return $this->belongsTo('App\Documento');
    }

    public function genero()
    {
        return $this->belongsTo('App\Genero');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
