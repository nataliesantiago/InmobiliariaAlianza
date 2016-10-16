<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ArriendosController extends Controller
{
    public function indexArriendos(){
    	return view('usuario.arriendos');
    }
}