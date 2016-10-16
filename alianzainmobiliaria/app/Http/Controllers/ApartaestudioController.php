<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ApartaestudioController extends Controller
{
    public function indexApartaestudio(){
    	return view('administrador.apartaestudios');
    }
}