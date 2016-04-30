<?php

namespace MunDocente;

use Illuminate\Database\Eloquent\Model;
use MunDocente\Area;

class Area extends Model
{
    protected $table = 'areas';


    public function parent()
    {
    	return $this->belongsTo('MunDocente\Area', 'parent');
    }

    public function myAreas()
    {
    	return $this->hasMany('MunDocente\Area');
    }
}
