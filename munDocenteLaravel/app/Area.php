<?php

namespace MunDocente;

use Illuminate\Database\Eloquent\Model;
use MunDocente\Area;
use MunDocente\Publication;
use MunDocente\User;

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

    public function publications(){
        return $this->belongsToMany('MunDocente\Publication');
    }

    public function users(){
        return $this->belongsToMany('MunDocente\User');
    }
}
