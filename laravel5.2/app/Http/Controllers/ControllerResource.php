<?php

namespace MunDocente\Http\Controllers;

use Illuminate\Http\Request;

use MunDocente\Http\Requests;

class ControllerResource extends Controller
{
    public function index(){
    	return "Hola, soy el index";
    }

    public function create(){
    	return "Hola, soy el create";
    }
}
