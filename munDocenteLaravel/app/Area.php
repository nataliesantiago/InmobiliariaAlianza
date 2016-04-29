<?php

namespace MunDocente;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    protected $table = 'areas';


    public function parent()
    {
    	return $this->belongsTo(Area::class, 'parent');
    }

    public function myAreas()
    {
    	return $this->hasMany(Area::class);
    }
}
