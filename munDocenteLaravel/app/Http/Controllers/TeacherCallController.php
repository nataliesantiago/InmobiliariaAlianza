<?php

namespace MunDocente\Http\Controllers;

use Illuminate\Http\Request;

use MunDocente\Http\Requests;
use MunDocente\Http\Controllers\Controller;
use MunDocente\Publication;
use MunDocente\Area;
use MunDocente\User;
use MunDocente\Place;
use Carbon\Carbon;
use Auth;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;
use Session;

class TeacherCallController extends Controller
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
             return view('teacher_call.index', [
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
                        return view('teacher_call.index', [
                        'publications' => $publications,
                        'areas' => $areas]);
                     } else {
                        return view('without_publication', [
                        'areas' => $areas]); 
                     }                     
                }
                 //tipo de usuario publicador
                if($user->type == 2){
                    $publications = $this->getPublicationPublisher();
                    $areas = Area::all();
                    return view('teacher_call.index', [
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
            $user = $this->getUser();
            $areas = Area::all();
            if($this->isActived($user)){            
                $places = Place::where('type', '=', 1)
                            ->get();
                return view('teacher_call.create', compact('areas','places'));
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
        //dd($this->getIdAreaOne($request->area));
        $dt = Carbon::now()->format('Y-m-d');
        $publication = $request->user()->publications()->create([
            'name' => $request->name,
            'date_publication' => $dt,
            'type' => 1,
            'url' => $request->url,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'position' => $request->position,
            'description' => $request->description,
            'user_id' => $request->user()->id,
            'place_id' => $this->getIdCity($request->city),
            ]);
       // dd($publication);
        $this->assignAreasToPublication($publication, $request->area);
        $areas = Area::all();
        $places = Place::where('type', '=', 1)
                            ->get();
         return view('teacher_call.update', compact('areas', 'places'));
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
        $publication = Publication::where('id',$id)->with('areas','place')->first();
        if($publication->user_id == Auth::user()->id){
            $areas = Area::all();
            $places = Place::where('type', '=', 1)
                            ->get();
            return view('teacher_call.edit', compact('publication','areas','places'));
        } else {
            return view('errors.validation_publication');
        }
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
        $publication = Publication::where('id',$id)->with('areas','place')->first();
        $this->assignAreasToPublication($publication, $request->input('area'));
        $publication->update([
            'name' => $request->input('name'),
            'place_id' => $this->getIdCity($request->input('city')),
            'url' => $request->input('url'),
            'start_date' => $request->input('start_date'),
            'end_date' => $request->input('end_date'),
            'description' => $request->input('description'),
            'position' => $request->input('position'),
            ]);
        Session::flash('flash_message', 'Publicación actualizada correctamente');
        $areas = Area::all();
        $places = Place::where('type', '=', 1)
                            ->get();
        $publication = Publication::where('id',$id)->with('areas','place')->first();
        return view('teacher_call.edit', compact('publication','areas','places'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {  
        $publication = Publication::where('id',$id)->first();
        if($publication->user_id == Auth::user()->id){
            $publication->areas()->detach();
            $publication->delete();
            return view('teacher_call.destroy');
        } else {
            return view('errors.validation_publication');
        } 

    }

    private function getPublicationPublisher(){
        return $this->getUser()->publications()->where('type',1)->paginate(2);
    }

    //publicacione sde los no registrados
    private function publicationsGuest(){
        $publications = $this->publicationsVigent();
        return $publications;
   } 
   //publications vigentes
    private function publicationsVigent(){
        return Publication::with('user' ,'typeScientificMagazine', 'place')
                                    ->where('type', '=', 1)
                                    ->where('end_date', '>=', Carbon::now()->format('Y-m-d'))
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
                foreach ($area->publications()->with('user' ,'typeScientificMagazine', 'place')->where('type', '=', 1)->where('end_date', '>=', $dt)->orWhere('end_date', '=', null)->orderBy('start_date', 'desc')->get() as $publication) {
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

     private function getIdArea($value){
        return Area::where('name',$value)->first()->id;
    }

    private function getIdCity($nameCity){
        return Place::where('name',$nameCity)->first()->id;
    }
    private function assignAreasToPublication($publication, $areas){
        $publication->areas()->detach();
        foreach ($areas as $value) {
            if(! is_numeric($value)){
              $publication->areas()->attach($this->getIdArea($value)); 
            } else {
              $publication->areas()->attach($value);
            }
        }
    }
}
