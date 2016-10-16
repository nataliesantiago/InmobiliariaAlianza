<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Operacion extends Model
{
    //
             /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'operaciones';
    protected $fillable = [
        'nombre',
    ];
}