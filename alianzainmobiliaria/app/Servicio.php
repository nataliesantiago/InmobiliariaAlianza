<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    //
                 /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'servicios';
    protected $fillable = [
        'nombre',
    ];
}
