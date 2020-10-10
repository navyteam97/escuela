<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CajaCurricularProfesor extends Model
{
    protected $table = 'cajas_curriculares_profesores';
    protected $fillable = [
        'status',
        'profesor_id',
        'cajaCurricular_id',
        'condicion_id',
    ];

    public function cajaCurricular()
    {
        return $this->belongsTo('App\CajaCurricular');
    }

    public function condicion()
    {
        return $this->belongsTo('App\Condicion');
    }

    public function profesor()
    {
        return $this->belongsTo('App\Profesor');
    }
}
