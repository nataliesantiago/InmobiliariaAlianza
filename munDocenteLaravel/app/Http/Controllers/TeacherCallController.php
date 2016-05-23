<?php

namespace MunDocente\Http\Controllers;

use Illuminate\Http\Request;

use MunDocente\Http\Requests;
use MunDocente\Http\Controllers\Controller;
use MunDocente\Publication;
use MunDocente\Area;
use MunDocente\User;
use Carbon\Carbon;
use Auth;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;

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
            $users = User::with('typeOfUser', 'areas.publications')
                    ->where('id' ,'=', Auth::user()->id)
                    ->get();
            //dd($users);
            foreach ($users as $value) {
               $user = $value;
            }
            if($user->type == 1){
                 $resultPublications = $this->getPublicationsDocent();
                 $areas = Area::all();
                 if( $resultPublications[0] != 'vacio'){
                    $pageStart = \Request::get('page', 1);
                     $perPage = 2;
                     $offSet = ($pageStart * $perPage) - $perPage; 
                     $itemsForCurrentPage = array_slice($resultPublications, $offSet, $perPage, true);
                     $publications = new LengthAwarePaginator($itemsForCurrentPage, count($resultPublications), $perPage, Paginator::resolveCurrentPage(), array('path' => Paginator::resolveCurrentPath()));     
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
                $publications = $this->publicationsGuest();
                $areas = Area::all();
                return view('teacher_call.index', [
                'publications' => $publications,
                'areas' => $areas]);
            }
            //admin
            if($user->type == 3){
                echo 'soy el admin :3';
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
            return view('teacher_call.create');
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
        $request->user()->publications()->create([
            'name' => $request->name,
            'date_publication' => $request->date_publication,
            'type' => 1,
            'url' => $request->url,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'position' => $request->position,
            'description' => $request->description,
            'user_id' => $request->user()->id,
            ]);
         return view('teacher_call.update');
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
                                    ->where('type', '=', 1)
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
}
