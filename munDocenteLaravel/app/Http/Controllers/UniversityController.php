<?php

namespace MunDocente\Http\Controllers;

use Illuminate\Http\Request;

use MunDocente\Http\Requests;
use MunDocente\Http\Controllers\Controller;
use MunDocente\Publication;
use MunDocente\Area;
use MunDocente\Place;
use MunDocente\User;
use MunDocente\TypeOfAcademicInstitution;
use MunDocente\AcademicInstitution;
use Carbon\Carbon;
use Auth;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;
use Session;

class UniversityController extends Controller
{

    public function index(){
        $universitys = AcademicInstitution::all();
        return view('university.index', compact('universitys'));
    }

/**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
                $places = Place::where('type', '=', 1)
                            ->get();
                /**     
                $type_universitys = TypeOfAcademicInstitution::where('type', '=', 1)
                            ->get();
				*/
                return view('university.create', compact('places'));
           
    }

     public function edit($id)
    {
                $places = Place::where('type', '=', 1)
                            ->get();
                /**     
                $type_universitys = TypeOfAcademicInstitution::where('type', '=', 1)
                            ->get();
                */
                return view('university.edit', compact('places'));
           
    }

     /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }
}
