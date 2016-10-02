<?php

namespace alianza;

use Illuminate\Database\Eloquent\Model;
use alianza\Area;
use alianza\Publication;
use alianza\User;

class Area extends Model
{
    protected $table = 'areas';


    public function parent()
    {
    	return $this->belongsTo('alianza\Area', 'parent');
    }

    public function myAreas()
    {
    	return $this->hasMany('alianza\Area');
    }

    public function publications(){
        return $this->belongsToMany('alianza\Publication');
    }

    public function users(){
        return $this->belongsToMany('alianza\User');
    }
}
