<?php

namespace MunDocente\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use MunDocente\Http\Requests;
use MunDocente\Http\Controllers\Controller;
use MunDocente\Publication;
use MunDocente\Area;
use MunDocente\Place;
use MunDocente\User;
use Carbon\Carbon;
use DB;

class IndexController extends Controller
{
   public function index(){
        $dt = Carbon::now()->format('Y-m-d');
        $publications = Publication::with('user' ,'typeScientificMagazine')
                                    ->where('end_date', '>=', $dt)
                                    ->orWhere('end_date', '=', null)
                                    ->orderBy('start_date', 'desc')
                                    ->paginate(2);
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
                                    ->where(function($query){
                                        $dt = Carbon::now()->format('Y-m-d');
                                        $query->where('end_date', '>=', $dt)
                                              ->orWhere('end_date', '=', null);
                                    })
                                    ->orderBy('start_date', 'desc')
                                    ->paginate(2);
    	$areas = Area::all();
    	return view('teacher_call', compact('publications', 'areas'));
    }

    public function academic_event(){
    	$publications = Publication::with('user')
                                    ->where('type', '=', 3)
                                    ->where(function($query){
                                        $dt = Carbon::now()->format('Y-m-d');
                                        $query->where('end_date', '>=', $dt)
                                              ->orWhere('end_date', '=', null);
                                    })
                                    ->orderBy('start_date', 'desc')
                                    ->paginate(2);
    	$areas = Area::all();
    	return view('academic_event', compact('publications', 'areas'));
    }

    public function scientific_magazine(){
    	$publications = Publication::with('user','typeScientificMagazine')
                                    ->where('type', '=', 2)
                                    ->where(function($query){
                                        $dt = Carbon::now()->format('Y-m-d');
                                        $query->where('end_date', '>=', $dt)
                                              ->orWhere('end_date', '=', null);
                                    })
                                    ->orderBy('start_date', 'desc')
                                    ->paginate(2);
    	$areas = Area::all();
    	return view('scientific_magazine', compact('publications', 'areas'));
    }
     public function search(){
        $places = Place::where('type', '=', 1)
                        ->get();
        $areas = Area::whereNotNull('parent')
                    ->get();
        return view('search', [
            'areas' => $areas,
            'places' => $places
            ]);
    }
    public function record(){
        
        return view('record');
    }
    public function setting_account($id){
        $user = User::with('academicInstitution')
                    ->where('id','=',$id)
                    ->get();

               // dd($user);
        return view('setting_account', compact('user'));
    }
    public function result_search_basic(Request $request){
        $this->validate($request, [
            'query' => 'required',
            ]);
        $query = $request->input('query');
        $publications =Publication::with('user','typeScientificMagazine')
                                ->where('name', 'LIKE', '%' . $query . '%')
                                ->paginate(5);
        $places = Place::where('type', '=', 1)
                        ->get();
        $areas = Area::whereNotNull('parent')
                    ->get();
        return view('result_search', [
            'publications' => $publications,
            'areas' => $areas,
            'places' => $places
            ]);
    }
    public function result_search_advanced(Request $request){
        $this->validate($request, [
            'search' => 'required'
            ]);

        $search = $request->input('search');
        $publications =Publication::with('user','typeScientificMagazine')
                                ->where('name', 'LIKE', '%' . $search . '%')
                                ->paginate(5);
      //dd($publications );
        $areas = Area::whereNotNull('parent')
                    ->get();
        return view('result_search', [
            'publications' => $publications,
            'areas' => $areas]);      
    }

}
