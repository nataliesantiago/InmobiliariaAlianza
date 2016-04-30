<?php

namespace MunDocente\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use MunDocente\Http\Requests;
use MunDocente\Http\Controllers\Controller;
use MunDocente\Publication;
use MunDocente\Area;

use DB;

class IndexController extends Controller
{
   public function index(){
        $publications = Publication::with('user' ,'typeScientificMagazine')->paginate(2);
        //$users = User::with('typeOfUser')->get();
        //dd($publications);
        $areas = Area::all();
        return view('app', [
            'publications' => $publications,
            'areas' => $areas]);
    }

    public function teacher_call(){
    	$publications = Publication::with('user')
                                    ->where('type', '=', 1)
                                    ->paginate(5);
    	$areas = Area::all();
    	return view('teacher_call', compact('publications', 'areas'));
    }

    public function academic_event(){
    	$publications = Publication::with('user')
                                    ->where('type', '=', 3)
                                    ->paginate(5);
    	$areas = Area::all();
    	return view('academic_event', compact('publications', 'areas'));
    }

    public function scientific_magazine(){
    	$publications = Publication::with('user','typeScientificMagazine')
                                    ->where('type', '=', 2)
                                    ->paginate(5);
    	$areas = Area::all();
    	return view('scientific_magazine', compact('publications', 'areas'));
    }
     public function search(){
        
        return view('search');
    }
    public function record(){
        
        return view('record');
    }
    public function setting_account(){
        
        return view('setting_account');
    }
    public function result_search(){
         $publications = Publication::paginate(5);
      
        $areas = Area::all();
        return view('result_search', [
            'publications' => $publications,
            'areas' => $areas]);      
    }

}
