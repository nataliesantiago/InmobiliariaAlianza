<?php

namespace MunDocente;

use Illuminate\Database\Eloquent\Model;
use MunDocente\TypeOfPublication;
use MunDocente\TypeOfScientificMagazine;
use MunDocente\Place;
use MunDocente\User;
use MunDocente\Area;

class Publication extends Model
{
    protected $table = 'publications';


    public function typeOfPublication()
    {
    	return $this->belongsTo('MunDocente\TypeOfPublication', 'type');
    }

    public function typeScientificMagazine()
    {
    	return $this->belongsTo('MunDocente\TypeOfScientificMagazine', 'category');
    }

    public function place()
    {
    	return $this->belongsTo('MunDocente\Place');
    }

    public function user(){
    	return $this->belongsTo('MunDocente\User', 'user_id');
    }

    public function areas(){
        return $this->belongsToMany('MunDocente\Area');
    }
}
