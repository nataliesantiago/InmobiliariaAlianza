<?php 

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use DB;
use App\Models\AreaM;
use App\Models\TypePlaceM;
use App\Models\PlaceM;
use App\Models\TypeAcademicInsM;
use App\Models\AcademicInsM;
use App\Models\UserM;
use App\Models\PublicationM;

class GeneralController extends Controller {

	//controlador tabla area
    public function showArea(){

    	$areas = AreaM::All();
    	echo count($areas);

    	return view('areaList', compact('areas'));
    }

    //controlador tabla lugares
    public function showPlace(){

    	$places = PlaceM::All();
    	echo count($places);

    	return view('placeList', compact('places'));
    }

    //controlador tabla institucion academica
    public function showAcademic(){

        $academics = AcademicInsM::All();
        echo count($academics);

        return view('academicList', compact('academics'));
    }

    //controlador tabla usuarios
    public function showUser(){

        $users = UserM::All();
        echo count($users);

        return view('user', compact('users'));
    }

    //controlador publicaciones
    public function showPublication(){

        $publications = PublicationM::All();
        echo count($publications);

        return view('publication', compact('publications'));

    }
}