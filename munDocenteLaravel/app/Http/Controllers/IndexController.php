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

class IndexController extends Controller
{
   public function index(){
        $dt = Carbon::now()->format('Y-m-d');
        $publications = Publication::with('user' ,'typeScientificMagazine')
                                    ->where('end_date', '>=', $dt)
                                    ->orWhere('end_date', '=', null)
                                    ->orderBy('start_date', 'desc')
                                    ->paginate(2);
        //$users = User::with('typeOfUser')->get();
        //dd($publications);
        $areas = Area::all();
        return view('app', [
            'publications' => $publications,
            'areas' => $areas]);
    }  


    public function forget(){

            return view('resetpass');

    }



}
