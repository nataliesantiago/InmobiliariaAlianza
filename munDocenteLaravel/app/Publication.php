<?php

namespace MunDocente;

use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{
    protected $table = 'publications';


    public function typeOfPublication()
    {
    	return $this->belongsTo(TypeOfPublication::class, 'type');
    }

    public function typeScientificMagazine()
    {
    	return $this->belongsTo(TypeOfScientificMagazine::class, 'category');
    }

    public function place()
    {
    	return $this->belongsTo(Place::class, 'place');
    }

    public function user(){
    	return $this->belongsTo(User::class, 'user');
    }
}
