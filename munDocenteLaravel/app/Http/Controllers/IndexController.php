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
use Auth;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;


class IndexController extends Controller
{

    public function ownPublication(){
    $areas = Area::all();
    if($this->isActived()){
        $publications = $this->publicationsGuest();        
        return view('manage_ownpublication', compact('publications','areas'));
    } else {
        return view('user_desactived', compact('areas'));
    } 
   }

   public function index(){
    $areas = Area::all();
     if (Auth::guest()){ //usuario visitante sin registro
        $publications = $this->publicationsGuest();
        return view('app', compact('publications','areas'));
     } else {
            $user = $this->getUser();
            if($this->isActived()){
                if($user->type == 1){
                     $resultPublications = $this->getPublicationsDocent();
                     if( $resultPublications[0] != 'vacio'){ 
                       $publications = $this->paginate($resultPublications);   
                        return view('app', [
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
                    return view('app', [
                    'publications' => $publications,
                    'areas' => $areas]);
                }
                //admin(adminMunDocente)
                if($user->type == 3){
                    return view('admin');
                }                
            } else {
                return view('user_desactived', compact('areas'));
            }
        }  
    }  
    //se valida si el usuario esta activado al sistema
    private function isActived(){
        $user = $this->getUser();
        return $user->activedMe ? true : false;
    }
    //se realiza la paginación a partir de un arreglo 
    private function paginate($resultPublications){
        $pageStart = \Request::get('page', 1);
        $perPage = 2;
        $offSet = ($pageStart * $perPage) - $perPage; 
        $itemsForCurrentPage = array_slice($resultPublications, $offSet, $perPage, true);
        $publications = new LengthAwarePaginator($itemsForCurrentPage, count($resultPublications), $perPage, Paginator::resolveCurrentPage(), array('path' => Paginator::resolveCurrentPath()));  
        return $publications;
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
                foreach ($area->publications()->with('user' ,'typeScientificMagazine', 'place')->where('end_date', '>=', $dt)->orWhere('end_date', '=', null)->orderBy('start_date', 'desc')->get() as $publication) {
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
   //obteniendo el usuario actual
   private function getUser(){
        $users = User::with('typeOfUser', 'areas.publications')
                        ->where('id' ,'=', Auth::user()->id)
                        ->get();
        foreach ($users as $value) {
            $user = $value;
        }
        return $user;
   }
}
