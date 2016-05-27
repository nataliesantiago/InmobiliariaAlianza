<?php

namespace MunDocente\Http\Controllers;

use Illuminate\Http\Request;

use MunDocente\Http\Requests;
use MunDocente\Http\Controllers\Controller;
use MunDocente\Http\Controllers\UserController;
use MunDocente\Publication;
use MunDocente\Area;
use MunDocente\Place;
use MunDocente\User;
use Carbon\Carbon;
use Auth;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;
use MunDocente\TypeOfScientificMagazine;
use DB;


class ScientificMagazineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::guest()){
            $publications = $this->publicationsGuest();
            $areas = Area::all();
               //dd($publications);
             return view('scientific_magazine.index', [
            'publications' => $publications,
            'areas' => $areas]);
        } else {
            $user = $this->getUser();
            $areas = Area::all();
            if($this->isActived($user)){  
                if($user->type == 1){
                     $resultPublications = $this->getPublicationsDocent();
                     if( $resultPublications[0] != 'vacio'){
                        $publications = $this->paginate($resultPublications);
                        return view('scientific_magazine.index', [
                        'publications' => $publications,
                        'areas' => $areas]);
                     } else {
                        return view('without_publication', [
                        'areas' => $areas]); 
                     }                     
                }
                //tipo de usuario publicador
                if($user->type == 2){
                    $publications = $this->publicationsGuest();
                    $areas = Area::all();
                    return view('scientific_magazine.index', [
                    'publications' => $publications,
                    'areas' => $areas]);
                }
                //admin
                if($user->type == 3){
                    echo 'soy el admin :3';
                }
            } else {
                return view('user_desactived', compact('areas'));
            }   
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if($this->isValidate()){
            $areas = Area::all();
            $user = $this->getUser();
            if($this->isActived($user)){
                $type_of_scientific_magazines = TypeOfScientificMagazine::all();
                $places = Place::where('type', '=', 1)
                            ->get();
                return view('scientific_magazine.create', compact('type_of_scientific_magazines','areas','places'));
            } else {
                 $user = User::where('id', '=', Auth::user()->id)
                    ->get();
                foreach ($user as $key) {
                    $typeUser = $key->type;
                }
                return view('user.edit', compact('user','areas','typeUser'));
            }         
        } else {            
            return view('errors.validation'); 
        }        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dt = Carbon::now()->format('Y-m-d');
        $id_category = $this->getIdCategory($request->category);
        $publication = $request->user()->publications()->create([
            'name' => $request->name,
            'date_publication' => $dt,
            'type' => 2,
            'category'  => $id_category,
            'url' => $request->url,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'description' => $request->description,
            'user_id' => $request->user()->id,
            'place_id' => $this->getIdCity($request->city),
            ]);
        $this->assignAreasToPublication($publication, $request->area);
        $areas = Area::all();
        $places = Place::where('type', '=', 1)
                            ->get();
        $type_of_scientific_magazines = TypeOfScientificMagazine::all();
        return view('scientific_magazine.update', compact('type_of_scientific_magazines','areas','places'));
    }

   
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    //metodo que eduta las publicaciones de una revista cientifica
    public function edit_magazine(){
         $areas = Area::all();
        $publications = $this->publicationsGuest();  
        $places = Place::all();
        $type_of_scientific_magazines = TypeOfScientificMagazine::all();
        return view('scientific_magazine.edit_magazine', compact('publications','areas','places','type_of_scientific_magazines'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    //publicacione sde los no registrados
    private function publicationsGuest(){
        $publications = $this->publicationsVigent();
        return $publications;
   } 
   //publications vigentes
    private function publicationsVigent(){
        $dt = Carbon::now()->format('Y-m-d');
        return Publication::with('user' ,'typeScientificMagazine', 'place')
                                    ->where('type', '=', 2)
                                    ->where('end_date', '>=', $dt)
                                    ->orWhere('end_date', '=', null)
                                    ->orderBy('start_date', 'desc')
                                    ->paginate(2);
   }
   //metodo que evalua las areas del usuario y retorna la pbulicaciones de ese usuario
   private function getPublicationsDocent(){
        //extrayendo las areas de un usuario
        $users = User::with('areas')
                    ->where('id', '=', Auth::user()->id)
                    ->get();
        foreach ($users as $user) {
            $areasDocent = $user->areas()->with('publications')->orderBy('name')->get();
        }
        //tomando las publicaciones de las áreas del usuario
        $dt = Carbon::now()->format('Y-m-d');
        $count = 0; 
        foreach ($areasDocent as $area) {
            if(count($area->publications()->get()) != 0){
                foreach ($area->publications()->with('user' ,'typeScientificMagazine', 'place')->where('type', '=', 2)->where('end_date', '>=', $dt)->orWhere('end_date', '=', null)->orderBy('start_date', 'desc')->get() as $publication) {
                    $publications[$count] = $publication;
                    $count += 1;
                }
            }           
        }
        if($count==0){
            $publications[$count] = 'vacio';
        }
       // dd($publications);
        return $publications;
   }

    //validación del uusario para ingresar al formulario de crear
   private function isValidate(){
        if(! Auth::guest()){
            $users = User::with('typeOfUser', 'areas.publications')
                    ->where('id' ,'=', Auth::user()->id)
                    ->get();
            foreach ($users as $value) {
               $user = $value;
            }
            return $user->type == 2 ? true : false;
        } else {            
            return false; 
        } 
   }

    private function getIdCategory($name_category){
        $category = DB::table('type_of_scientific_magazines')
                    ->where('value', '=' , $name_category)
                    ->get();
        foreach ($category as $key) {
            $id = $key->id;
        }
        return $id;   
    }

    private function paginate($resultPublications){
        $pageStart = \Request::get('page', 1);
        $perPage = 2;
        $offSet = ($pageStart * $perPage) - $perPage; 
        $itemsForCurrentPage = array_slice($resultPublications, $offSet, $perPage, true);
        $publications = new LengthAwarePaginator($itemsForCurrentPage, count($resultPublications), $perPage, Paginator::resolveCurrentPage(), array('path' => Paginator::resolveCurrentPath()));  
        return $publications;
    }

    private function isActived($user){
        return $user->activedMe ? true : false;
    }

    private function getUser(){
        $users = User::with('typeOfUser', 'areas.publications')
                    ->where('id' ,'=', Auth::user()->id)
                    ->get();
            //dd($users);
            foreach ($users as $value) {
               $user = $value;
        }
        return $user;
    }

    private function getIdAreaOne($areas){
        return Area::where('name',$areas[0])->first()->id;
    }

    private function getIdCity($nameCity){
        return Place::where('name',$nameCity)->first()->id;
    }
    private function assignAreasToPublication($publication, $areas){
        $cont = 0;
        foreach ($areas as $value) {
            if($cont == 0){
              $publication->areas()->attach($this->getIdAreaOne($areas)); 
            } else {
              $publication->areas()->attach($value);
            }
            $cont += 1;
        }
    }
}
