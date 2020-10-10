<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Division extends Model
{
    protected $table = 'divisiones';
    protected $fillable = [
        'descripcion',
        'status',
    ];

    public function divisiones()
    {
        return $this->hasMany('App\Division');
    }
}
