<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ApartamentosController extends Controller
{
    public function indexApartamentos(){
    	return view('administrador.apartamentos');
    }
}
