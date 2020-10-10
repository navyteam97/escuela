<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Direccion extends Model
{
    protected $table = 'direcciones';
    protected $fillable = [
        'chacra',
        'sector',
        'altura',
        'casa',
        'departamento',
        'piso',
        'descripcion',
        'status',
        'barrio_id',
        'cuadra_id',
        'calle_id',
        'municipio_id',
        'tipoDeDireccion_id',
    ];

    public function contactos()
    {
        return $this->hasMany('App\Contacto');
    }



    public function barrio()
    {
        return $this->hasMany('App\Barrio');
    }

    public function calle()
    {
        return $this->hasMany('App\Calle');
    }

    public function cuadra()
    {
        return $this->hasMany('App\Cuadra');
    }

    public function municipio()
    {
        return $this->hasMany('App\Municipio');
    }

    public function tipoDeDireccion()
    {
        return $this->hasMany('App\TipoDeDireccion');
    }
}
