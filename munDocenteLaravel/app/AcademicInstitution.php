<?php

namespace alianza;

use Illuminate\Database\Eloquent\Model;
use alianza\User;
use alianza\Place;
use alianza\TypeOfAcademicInstitution;

class AcademicInstitution extends Model
{
    protected $table = 'academic_institutions';

    protected $fillable = [
        'name','email', 'phone', 'description', 'place', 'type',
    ];

    public function typeOfAcademicInstitution()
    {
    	return $this->belongsTo('alianza\TypeOfAcademicInstitution', 'type');
    }

    public function users(){
    	return $this->hasMany('alianza\User');
    }

    public function place_id()
    {
    	return $this->belongsTo('alianza\Place', 'place');
    }

}