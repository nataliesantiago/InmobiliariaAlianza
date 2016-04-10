<?php

namespace MunDocente\Http\Controllers;

use Illuminate\Http\Request;

use MunDocente\Http\Requests;
use MunDocente\Http\Controllers\Controller;
use MunDocente\Models\Publication;
use MunDocente\Models\Area;

class IndexController extends Controller
{
    public function index(){
    	$publications = Publication::paginate(5);
    	$areas = Area::all();
    	return view('index', compact('publications', 'areas'));
    }
}
