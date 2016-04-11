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

    public function teacher_call(){
    	$publications = Publication::paginate(5);
    	$areas = Area::all();
    	return view('teacher_call', compact('publications', 'areas'));
    }

    public function academic_event(){
    	$publications = Publication::paginate(5);
    	$areas = Area::all();
    	return view('academic_event', compact('publications', 'areas'));
    }

    public function scientific_magazine(){
    	$publications = Publication::paginate(5);
    	$areas = Area::all();
    	return view('scientific_magazine', compact('publications', 'areas'));
    }
}
