<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inmueble extends Model
{
    //
          /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'inmuebles';
    protected $fillable = [
        'persona_id','ubicacion_id','tipo_id','area_total','area_construccion','observacion',
    ];
}
