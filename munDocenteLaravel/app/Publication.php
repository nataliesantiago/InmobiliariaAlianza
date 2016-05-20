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

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','date_publication', 'type', 'place_id', 'url', 'start_date', 'end_date', 'category','position', 'description', 'contact', 'user_id',
    ];

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
