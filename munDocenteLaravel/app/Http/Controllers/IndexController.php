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
use DB;
use Auth;
use Illuminate\Pagination\Paginator;


class IndexController extends Controller
{

   
   public function index(){
   
     if (Auth::guest()){
        $publications = $this->publicationsGuest();
        $areas = Area::all();
               //dd($publications);
        return view('app', [
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
             $publications = $this->publicationsDocent();
             $areas = Area::all();
            return view('app', [
            'publications' => new Paginator($publications, count($publications), 1),
            'areas' => $areas]);
        }

        if($user->type == 2){
            $publications = $this->publicationsGuest();
            $areas = Area::all();
            return view('app', [
            'publications' => $publications,
            'areas' => $areas]);
        }

        if($user->type == 3){
            echo 'soy el admin :3';
        } 
        }  
    }  


    public function forget(){

            return view('resetpass');

    }

    private function publicationsGuest(){
        $publications = $this->publicationsVigent();
        return $publications;
   } 

   private function publicationsDocent(){
        $areasDocent = $this->getAreasDocent();
        $publicationsAreas = $this->getPublicationAreas($areasDocent);
        //dd($publicationsAreas);
        return $publicationsAreas;
   }

   private function publicationsVigent(){
        $dt = Carbon::now()->format('Y-m-d');
        return Publication::with('user' ,'typeScientificMagazine', 'place')
                                    ->where('end_date', '>=', $dt)
                                    ->orWhere('end_date', '=', null)
                                    ->orderBy('start_date', 'desc')
                                    ->paginate(2);
   }

   

   private function getAreasDocent(){
       $areasDocent = DB::table('area_user')
                        ->where('user_id', '=', Auth::user()->id)
                        ->select('area_id')
                        ->get();
       // dd($areasDocent);
        $cont = 0;
        foreach ($areasDocent as $area) {
                $areasDocent[$cont] = Area::where('id', '=', $area->area_id)
                                        ->select('id', 'name')
                                        ->get();
                    $cont += 1;
                }
        //dd($areasDocent);
        $cont = 0;
        foreach ($areasDocent as $collection) {
                    
                    foreach ($collection as $array) {
                        $areasDocent[$cont] = $array->id;
                        $cont += 1;
                    }
               }
        return $areasDocent;
   }

   private function getPublicationAreas($areasDocent){
        $cont = 0;
        foreach ($areasDocent as $idArea) {
            $publications[$cont] = DB::table('area_publication')
                                ->where('area_id', '=', $idArea)
                                ->select('publication_id')
                                ->get();
            $cont += 1;
        }
        //dd($publications);
        $cont = 0;
        foreach ($publications as $key) {
            foreach ($key as $publication) {
                $idPublications[$cont] = $publication->publication_id;
                $cont += 1;
            }
        }
        //dd($idPublications);
        $publicationsUser = $this->publicationsUser($idPublications);
        return $publicationsUser;
   }

   private function publicationsUser($publicationsUser){
        $dt = Carbon::now()->format('Y-m-d');
        $cont = 0;
        foreach ($publicationsUser as $id) {
            $publicationsCollection[$cont] = Publication::with('user' ,'typeScientificMagazine', 'place')
                                    ->where('id', '=', $id)
                                    ->where('end_date', '>=', $dt)
                                    ->orWhere('end_date', '=', null)
                                    ->orderBy('start_date', 'desc')
                                    ->get();
            $cont += 1;
        }
      //  dd($publicationsCollection);
        $cont = 0;
        foreach ($publicationsCollection as $key) {
           foreach ($key as $value) {
                        $publications[$cont] = $value;
                        $cont += 1;
                    }
                }
       //dd(new Paginator($publications, count($publications), 1));
        return $publications;
   }
}
