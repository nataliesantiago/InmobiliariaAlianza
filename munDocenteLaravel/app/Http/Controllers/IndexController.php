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

class IndexController extends Controller
{

   
   public function index(){
   
     if (Auth::guest()){
        $publications = $this->publicationsGuest();
        $areas = Area::all();
        return view('app', [
            'publications' => $publications,
            'areas' => $areas]);

     } else {
        $users = User::with('typeOfUser')
                    ->where('id' ,'=', Auth::user()->id)
                    ->get();
        foreach ($users as $value) {
           $user = $value;
        }
        if($user->type == 1){
             $publications = $this->publicationsGuest();
             $areas = Area::all();
            return view('app', [
            'publications' => $publications,
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
        $dt = Carbon::now()->format('Y-m-d');
        $publications = Publication::with('user' ,'typeScientificMagazine', 'place')
                                    ->where('end_date', '>=', $dt)
                                    ->orWhere('end_date', '=', null)
                                    ->orderBy('start_date', 'desc')
                                    ->paginate(2);
        return $publications;
   } 
}
