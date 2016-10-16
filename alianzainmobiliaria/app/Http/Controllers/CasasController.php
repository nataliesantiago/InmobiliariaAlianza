<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class CasasController extends Controller
{
    public function indexCasas(){
    	return view('administrador.casas');
    }
}