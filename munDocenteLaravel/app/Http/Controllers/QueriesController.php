<?php

namespace MunDocente\Http\Controllers;

use Illuminate\Http\Request;

use MunDocente\Http\Requests;
use MunDocente\Area;
use MunDocente\Place;
use MunDocente\Publication;
use MunDocente\TypeOfPublication;
use MunDocente\AreaPublication;

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
        $areas = $this->getAreasSelected($areas);
        //dd($areas);//arreglo de areas seleccionadas en formato de numeros
        $valueCity = $request->input('city');
        $valueCity = $this->getValueCity($valueCity);
		//dd($valueCity);
		$valueTypePublication = $request->input('type_of_publication');
		$valueTypePublication = $this->getTypePublication($valueTypePublication);
        //dd($valueTypePublication);
        //

        $publications =Publication::with('user','typeScientificMagazine', 'place', 'areas')
                                ->where('name', 'LIKE', '%' . $search . '%');
        if($valueCity!=-1){
        	$publications = $publications->where('place_id', '=', $valueCity);
        }
        if($valueTypePublication!=-1){
        	$publications = $publications->where('type', '=', $valueTypePublication);
        }
        /*//conociendo las areas de las publciaciones como el usuario la pidio
        aqui la idea seria filtrar las publicaciones que estén contenidas 
        en esa area o en las hijas (PENDIENTE)
         $publications = $publications->get();
         foreach ($publications as $publication) {
         	$areas = $publication->areas;
         	dd($areas);
         }
      */
       $publications = $publications->paginate(5);
        $areas = Area::whereNotNull('parent')
                    ->get();
        return view('queries.result_search_advanced', [
            'publications' => $publications,
            'areas' => $areas
            ]);      
    }

    private function  getTypePublication($valueTypePublication){
    	if($valueTypePublication != 'Todas'){
	        $type_of_publication = TypeOfPublication::where('value', '=', $valueTypePublication)
	        						->select('id', 'value')
	        						->get();
	        foreach ($type_of_publication as $type) {        	
	        		$valueTypePublication = $type->id;	        	
	        }
		} else {
			$valueTypePublication = -1;
		}
		return $valueTypePublication;
    }

    private function getValueCity($valueCity){
    	if($valueCity != 'Todas'){
	        $city = Place::where('name', '=', $valueCity)
	                       ->select('id', 'name')
	                       ->get();
	        foreach ($city as $key) {
	        		$valueCity = $key->id;
	        	
	        }
       } else {
       	$valueCity = -1;
       }
       return $valueCity;
    }

    private function getAreasSelected($areas){
	  	   
        $cont = 0;
        foreach ($areas as $area) {
        		$selectedArea[$cont] = $area;
        		$cont += 1;
        }	          //  dd($selectedArea);
        $cont = 0;
        foreach ($selectedArea as $areaId ) {
        if(! is_numeric($areaId)){
        	$idArea = Area::where('name', '=', $areaId)
        		            ->select('id', 'name')
        					->get();
        	foreach ($idArea as $key2) {
	        		$valueArea = $key2->id;	        	
	        }
	       // dd($valueArea);
	        $selectedArea[$cont] = $valueArea;
	        $cont += 1;
        } else {
        	$idArea = Area::where('id', '=', $areaId)
        		            ->select('id')
        					->get();
        	foreach ($idArea as $key2) {
	        		$valueArea = $key2->id;	        	
	        }
	        //dd($valueArea);
	        $selectedArea[$cont] = $valueArea;
	        $cont += 1;
          }  	
        }
        	return $selectedArea;
           //dd($selectedArea); //Arreglos de areas seleccionadas en numeros :D
	  }

}
