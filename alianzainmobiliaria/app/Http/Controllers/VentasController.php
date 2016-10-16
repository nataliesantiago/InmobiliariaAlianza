<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class VentasController extends Controller
{
    public function indexVentas(){
    	return view('usuario.ventas');
    }
}