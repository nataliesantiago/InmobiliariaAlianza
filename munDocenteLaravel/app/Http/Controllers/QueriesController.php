<?php

namespace MunDocente\Http\Controllers;

use Illuminate\Http\Request;

use MunDocente\Http\Requests;
use MunDocente\Area;
use MunDocente\Place;
use MunDocente\Publication;
use MunDocente\TypeOfPublication;
use MunDocente\AreaPublication;
use DB;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;

class QueriesController extends Controller
{
    
  public function search_area($id){
    /*
        $result_publications = DB::table('area_publication')
                                    ->where('area_id','=',$id)
                                    ->select('publication_id')
                                    ->get();
        if(! is_null($result_publications)){
          $publications = $this->paginate($result_publications);
          $areas = Area::all();
          return view('queries.result_search_advanced', compact('publications','areas'));
        } else {
          return view('without_publication');
        }
        */
  }

  private function paginate($resultPublications){
        $pageStart = \Request::get('page', 1);
        $perPage = 2;
        $offSet = ($pageStart * $perPage) - $perPage; 
        $itemsForCurrentPage = array_slice($resultPublications, $offSet, $perPage, true);
        $publications = new LengthAwarePaginator($itemsForCurrentPage, count($resultPublications), $perPage, Paginator::resolveCurrentPage(), array('path' => Paginator::resolveCurrentPath()));  
        return $publications;
    }

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
        $areasSelected = $request->input('area'); 
        $areasSelected = $this->getAreasSelected($areasSelected);
       // dd($areasSelected);//arreglo de areas seleccionadas en formato de numeros
        $valueCity = $request->input('city');
        $valueCity = $this->getValueCity($valueCity);
		    //dd($valueCity);
		    $valueTypePublication = $request->input('type_of_publication');
		    $valueTypePublication = $this->getTypePublication($valueTypePublication);
        //dd($valueTypePublication);
        $areas = Area::all();
        if($areasSelected[0] == -1){
          $publications =Publication::with('user','typeScientificMagazine', 'place', 'areas')
                                  ->where('name', 'LIKE', '%' . $search . '%');
          if($valueCity!=-1){
          	$publications = $publications->where('place_id', '=', $valueCity);
          }
          if($valueTypePublication!=-1){
          	$publications = $publications->where('type', '=', $valueTypePublication);
          }
          $publications = $publications->paginate(5);
           
             return view('queries.result_search_advanced', [
            'publications' => $publications,
            'areas' => $areas
            ]);
        } else {
          $result_publications = $this->getPublicationAreas($search,$areasSelected,$valueCity,$valueTypePublication);
         //dd($result_publications);
          if($result_publications[0] != 'vacio'){
            $pageStart = \Request::get('page', 1);
            $perPage = 50;
            $offSet = ($pageStart * $perPage) - $perPage; 
            $itemsForCurrentPage = array_slice($result_publications, $offSet, $perPage, true);
            $publications = new LengthAwarePaginator($itemsForCurrentPage, count($result_publications), $perPage, Paginator::resolveCurrentPage(), array('path' => Paginator::resolveCurrentPath()));
            return view('queries.result_search_advanced', [
            'publications' => $publications,
            'areas' => $areas
            ]);
          } else {
            return view('without_publication', [
            'areas' => $areas
            ]);
          }
        }      
    }
    private function getPublicationAreas($search,$areasSelected,$valueCity,$valueTypePublication){
        $cont = 0;
          foreach ($areasSelected as $area) {
            $areasId = DB::table('area_publication')
                                    ->where('area_id','=',$area)
                                    ->select('publication_id')
                                    ->get();
            if(count($areasId) != 0){
              foreach ($areasId as $id) {
                  $publications[$cont] =Publication::with('user','typeScientificMagazine', 'place', 'areas')
                                  ->where('id', '=', $id->publication_id)
                                  ->where('name', 'LIKE', '%' . $search . '%');
                  if($valueCity!=-1){
                    $publications[$cont] = $publications[$cont]->where('place_id', '=', $valueCity);
                  }
                  if($valueTypePublication!=-1){
                    $publications[$cont] = $publications[$cont]->where('type', '=', $valueTypePublication);
                  }
                  $publications[$cont] = $publications[$cont]->get();
                 $cont += 1;
                /* if(!isset($publications[$cont])){
                    $cont -= 1;
                 }*/
              }
            } 
          }
       // dd($publications);
          if($cont != 0){
            $cont = 0;
            foreach ($publications as $value) {
              //dd($cont);
              foreach ($value as $key) {
                //dd($key);
                $publications[$cont] = $key;
                $cont += 1;
              }
              if($cont == 0){
                $publications[$cont] = 'vacio';
              }
            }
          } else {
            $publications[$cont] = 'vacio';
          }
        //dd($publications);
          return $publications;
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
        if($areaId != 'Todas'){
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
        } else {
          $selectedArea[0] = -1;
        }
              
        }
        	return $selectedArea;
           //dd($selectedArea); //Arreglos de areas seleccionadas en numeros :D
	  }
}
