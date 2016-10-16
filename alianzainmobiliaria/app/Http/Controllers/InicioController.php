<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class InicioController extends Controller
{
    public function indexInicio(){
    	return view('usuario.inicio');
    }

    public function acercaDe(){
    	return view('usuario.acercaDe');
    }

    public function contacto(){
    	return view ('usuario.contacto');
    }
}