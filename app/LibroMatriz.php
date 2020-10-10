<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LibroMatriz extends Model
{
    protected $table = 'libros_matrices';
    protected $fillable = [
        'numeroDeArchivo',
        'cicloLectivo',
        'certificadoDeIngreso',
        'status',
        'alumno_id',
    ];

    public function alumno()
    {
        return $this->belongsTo('App\Alumno');
    }
}
