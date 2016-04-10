<?php

namespace MunDocente\Http\Controllers;

use Illuminate\Http\Request;

use MunDocente\Http\Requests;
use MunDocente\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index(){
    	$publications = \MunDocente\Publication::all();
    	return view('index', compact('publications'));
    }
}
