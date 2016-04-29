<?php

namespace MunDocente;

use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    protected $table = 'places';


    public function typeOfPlace()
    {
    	return $this->belongsTo(TypeOfPlace::class, 'type');
    }

    public function academicInstitutions()
    {
    	return $this->hasMany(AcademicInstitution::class);
    }

    public function publications(){
    	return $this->hasMany(Publication::class);
    }

    public function parent()
    {
    	return $this->belongsTo(Place::class, 'parent');
    }

    public function myPlaces()
    {
    	return $this->hasMany(Place::class);
    }
}
