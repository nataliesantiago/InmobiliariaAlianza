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
	        $areas = Area::whereNotNull('parent')
	                    ->get();
	        $type_of_publications = TypeOfPublication::all();


	        return view('queries.search_advanced', [
	            'areas' => $areas,
	            'places' => $places,
	            'type_of_publications' => $type_of_publications
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

	   public function result_search_advanced(Request $request){
        $this->validate($request, [
            'search' => 'required'
            ]);
       // dd($request);

        $search = $request->input('search');
        $areas = $request->input('area');
            

        $cont = 0;
        foreach ($areas as $area) {
        	if($area != 'Sin definir'){
        		$selectedArea[$cont] = $area;
        		$cont += 1;
        	}
        }	

        foreach ($selectedArea as $areaId ) {
        	$idArea = Area::where('name', '=', $areaId)
        		            ->select('id', 'name')
        					->get();

        	foreach ($idArea as $key2) {
	        		$valueArea = $key2->id;
	        	
	        }
        }


        if($request->input('city') != 'Sin definir'){
	        $city = Place::where('name', '=', $request->input('city'))
	                                                    ->select('id', 'name')
	                                                    ->get();
	        foreach ($city as $key) {
	        		$valueCity = $key->id;
	        	
	        }
        }

		if($request->input('type_of_publication') != 'Sin definir'){
	        $type_of_publication = TypeOfPublication::where('value', '=', $request->input('type_of_publication'))
	        										->select('id', 'value')
	        										->get();
	        foreach ($type_of_publication as $type) {        	
	        		$valueTypePublication = $type->id;	        	
	        }
		}

        $publications =Publication::with('user','typeScientificMagazine')
                                ->where('name', 'LIKE', '%' . $search . '%')
                                
                                ->paginate(5);
      //dd($publications );
        $areas = Area::whereNotNull('parent')
                    ->get();
        return view('queries.result_search', [
            'publications' => $publications,
            'areas' => $areas
            ]);      
    }

}
