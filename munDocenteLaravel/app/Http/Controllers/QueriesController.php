<?php

namespace MunDocente\Http\Controllers;

use Illuminate\Http\Request;

use MunDocente\Http\Requests;
use MunDocente\Area;
use MunDocente\Place;
use MunDocente\Publication;

class QueriesController extends Controller
{
    
	 public function search_advanced(){
	        $places = Place::where('type', '=', 1)
	                        ->get();
	        $areas = Area::whereNotNull('parent')
	                    ->get();
	        return view('queries.search_advanced', [
	            'areas' => $areas,
	            'places' => $places
	            ]);
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
	        return view('queries.result_search', [
	            'publications' => $publications,
	            'areas' => $areas,
	            'places' => $places
	            ]);
	  }

}
