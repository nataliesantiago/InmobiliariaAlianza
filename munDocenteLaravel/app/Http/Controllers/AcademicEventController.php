<?php

namespace MunDocente\Http\Controllers;

use Illuminate\Http\Request;

use MunDocente\Http\Requests;
use MunDocente\Http\Controllers\Controller;
use MunDocente\Publication;
use MunDocente\Area;
use MunDocente\Place;
use MunDocente\User;
use Carbon\Carbon;
use Auth;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;
use Session;
use Mail;


class AcademicEventController extends Controller
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
             return view('academic_event.index', [
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
                        return view('academic_event.index', [
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
                    return view('academic_event.index', [
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
                $places = Place::where('type', '=', 1)
                            ->get();       
                return view('academic_event.create', compact('areas','places'));
            } else {
                return view('errors.validation');  
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
        $publication = $request->user()->publications()->create([
            'name' => $request->name,
            'date_publication' => $dt,
            'type' => 3,
            'url' => $request->url,
            'start_date' => $request->start_date,
            'description' => $request->description,
            'user_id' => $request->user()->id,
            'place_id' => $this->getIdCity($request->city),
            ]);
        if($request->end_date == ""){
           
        } else {
            Publication::where('id',$publication->id)
                        ->update([
                            'end_date' => $request->end_date
                            ]);
        }
        $this->assignAreasToPublication($publication, $request->area);
        $this->send_email_users_area($publication);
        $areas = Area::all();
        $places = Place::where('type', '=', 1)
                            ->get();
        return view('academic_event.update', compact('areas','places'));
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
            return view('academic_event.edit', compact('publication','areas','places'));
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
            ]);
        Session::flash('flash_message', 'Publicación actualizada correctamente');
        $areas = Area::all();
        $places = Place::where('type', '=', 1)
                            ->get();
        $publication = Publication::where('id',$id)->with('areas','place')->first();
        return view('academic_event.edit', compact('publication','areas','places'));
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
            return view('scientific_magazine.destroy');
        } else {
            return view('errors.validation_publication');
        } 
    }
    //publicacione sde los no registrados
    private function publicationsGuest(){
        return $this->paginate($this->publicationsVigent());
   } 
   private function getPublicationPublisher(){
        return $this->getUser()->publications()->where('type',3)->paginate(2);
    }
   //publications vigentes
    private function publicationsVigent(){
        $dt = Carbon::now()->format('Y-m-d');
        $publications =  Publication::with('user' ,'typeScientificMagazine', 'place')
                                    ->where('end_date', '>=', $dt)
                                    ->orWhere('end_date', '=', null)
                                    ->orderBy('start_date', 'desc')
                                    ->get();
    $count = 0;                                
    foreach ($publications as $publication) {
        if($publication->type == 3){
            $aux[$count] = $publication;
            $count += 1;
        }
    }
    if($count == 0){
        $aux[$count] = 'vacio';
    }
        return $aux;
   }
   //metodo que evalua las areas del usuario y retorna la pbulicaciones de ese usuario
   private function getPublicationsDocent(){
        $areasDocent = $this->getUser()->areas()->with('publications')->orderBy('name')->get();
        // dd($areasDocent);
        //tomando las publicaciones de las áreas del usuario
        $dt = Carbon::now()->format('Y-m-d');
        $count = 0; 
        foreach ($areasDocent as $area) {
            //dd($area->publications()->get());
            if(count($area->publications()->get()) != 0){
                foreach ($area->publications()->orderBy('start_date', 'desc')->get() as $publication) {
                    if($publication->type == 3){
                        if($publication->end_date >= $dt || $publication->end_date == null){
                            $publications[$count] = $publication;
                            $count += 1;
                         }  
                    }                    
                }
            }           
        }
        if($count == 0){
            $publications[$count] = 'vacio';
        }
        //dd($publications);
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
        if($user->type == 1){
            if($user->activedMe){
           return true; 
            } else {
                return false;
            }  
        } else {
            if($user->activedMe && $user->activedAdmin){
           return true; 
            } else {
                return false;
            }   
        }  
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

     private function send_email_users_area($publication){
        $areas = $publication->areas()->with('users')->get();
        foreach ($areas as $area) {
                if(count($area->users) != 0){
                       foreach ($area->users as $user) {
                           if($user->receive_notifications){
                                 //enviar correo al usuario que ha activdado notificaciones
                                  Mail::send('emails.receive_notifications', ['text' => 'Ha sido publicada un evento academico en Mundocente que se encuentra en un área de tu interés: '.$area->name], function($msj) use ($user,$area){
                                        $msj->subject('Usuario: '.$user->username.' ha sido publicado un evento academico en el siguiente área de su interés: '.$area->name);
                                        $msj->to($user->email);
                                  });
                           }
                       }
                }
        }
    }
}
