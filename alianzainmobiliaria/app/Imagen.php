<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Imagen extends Model
{
    //
          /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'imagenes';
    protected $fillable = [
        'inmueble_id','servicio_id',
    ];

}
