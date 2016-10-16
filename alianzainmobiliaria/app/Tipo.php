<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipo extends Model
{
    //
                   /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'tipos';
    protected $fillable = [
        'nombre',
    ];
}
