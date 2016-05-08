<?php

namespace MunDocente\Http\Controllers;

use Illuminate\Http\Request;

use MunDocente\Http\Requests;
use MunDocente\Area;
use MunDocente\Place;
use MunDocente\Publication;
use MunDocente\TypeOfPublication;

class QueriesController extends Controller
{
    
	 public function search_advanced(){
	        $places = Place::where('type', '=', 1)
	                        ->get();
	        $areas = Area::all();
	        $type_of_publications = TypeOfPublication::all();


	        return view('queries.search_advanced', [
	            'areas' => $areas,
	            'places' => $places,
	            'type_of_publications' => $type_of_publications
	            ]);
	  }

	  public function result_search_basic(Request $request){
	  		$this->validate($request, [
	            'keyLetter' => 'required',
	            ]);
	        $keyLetter = $request->input('keyLetter');
	        $publications =Publication::with('user','typeScientificMagazine', 'place')
	                                ->where('name', 'LIKE', '%' . $keyLetter . '%')
	                                ->paginate(5);
	        $places = Place::where('type', '=', 1)
	                        ->get();
	        $areas = Area::whereNotNull('parent')
	                    ->get();

	                 //   dd($publications);
	        return view('queries.result_search_basic', [
	            'publications' => $publications,
	            'areas' => $areas,
	            'places' => $places
	            ]);
	  }

	   public function result_search_advanced(Request $request){
        $this->validate($request, [
            'search' => 'required'
            ]);
       // dd($request);

        $search = $request->input('search');
        $areas = $request->input('area');
            

        $cont = 0;
        foreach ($areas as $area) {
        		$selectedArea[$cont] = $area;
        		$cont += 1;
        }	            //dd($selectedArea);


        foreach ($selectedArea as $areaId ) {
        	$idArea = Area::where('name', '=', $areaId)
        		            ->select('id', 'name')
        					->get();

        	foreach ($idArea as $key2) {
	        		$valueArea = $key2->id;
	        	
	        }
        }

            //dd($valueArea);


        if($request->input('city') != 'Todas'){
	        $city = Place::where('name', '=', $request->input('city'))
	                                                    ->select('id', 'name')
	                                                    ->get();
	        foreach ($city as $key) {
	        		$valueCity = $key->id;
	        	
	        }
       } else {
       	$valueCity = 3;
       }
//dd($valueCity);
		if($request->input('type_of_publication') != 'Todas'){
	        $type_of_publication = TypeOfPublication::where('value', '=', $request->input('type_of_publication'))
	        										->select('id', 'value')
	        										->get();
	        foreach ($type_of_publication as $type) {        	
	        		$valueTypePublication = $type->id;	        	
	        }
		}

        $publications =Publication::with('user','typeScientificMagazine')
                                ->where('name', 'LIKE', '%' . $search . '%')
                                ->orWhere('place_id', '=', $valueCity)
								->paginate(5);
      //dd($publications );
        $areas = Area::whereNotNull('parent')
                    ->get();
        return view('queries.result_search_advanced', [
            'publications' => $publications,
            'areas' => $areas
            ]);      
    }

}
