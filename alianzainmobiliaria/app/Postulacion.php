<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Postulacion extends Model
{
    //
                /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'postulaciones';
    protected $fillable = [
        'operacion_id','operaciones','fecha_inicio','fecha_fin','precio','estado_pustulacion',
    ];
}
