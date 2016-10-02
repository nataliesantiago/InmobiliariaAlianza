<?php

namespace alianza;

use Illuminate\Database\Eloquent\Model;
use alianza\TypeOfPublication;
use alianza\TypeOfScientificMagazine;
use alianza\Place;
use alianza\User;
use alianza\Area;

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
    	return $this->belongsTo('alianza\TypeOfPublication', 'type');
    }

    public function typeScientificMagazine()
    {
    	return $this->belongsTo('alianza\TypeOfScientificMagazine', 'category');
    }

    public function place()
    {
    	return $this->belongsTo('alianza\Place');
    }

    public function user(){
    	return $this->belongsTo('alianza\User', 'user_id');
    }

    public function areas(){
        return $this->belongsToMany('alianza\Area');
    }
}
