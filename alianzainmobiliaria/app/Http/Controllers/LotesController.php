<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class LotesController extends Controller
{
    public function indexLotes(){
    	return view('administrador.lotes');
    }
}