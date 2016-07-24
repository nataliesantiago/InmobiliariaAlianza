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
        $academic_institutions = AcademicInstitution::with('typeOfAcademicInstitution', 'place_id')->get();
        return view('university.index', compact('academic_institutions'));
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
                   
                $type_universitys = TypeOfAcademicInstitution::all();
				//dd($type_universitys);
                return view('university.create', compact('places', 'type_universitys'));
           
    }

     public function edit($id)
    {

                $academic_institution = AcademicInstitution::where('id',$id)
                            ->first();
                $places = Place::where('type', '=', 1)
                            ->where('id','!=',$academic_institution->place)
                            ->get();
                $my_place = Place::where('id',$academic_institution->place)
                                    ->first();
                $type_universitys = TypeOfAcademicInstitution::where('id','!=',$academic_institution->type)->get();
                $my_type = TypeOfAcademicInstitution::where('id',$academic_institution->type)->first();

                return view('university.edit', compact('places', 'my_place' ,'academic_institution', 'my_type', 'type_universitys'));
           
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $academic_institution = AcademicInstitution::where('id',$id)->first();
        $place = $this->getPlace($request->city);
        $type = $this->getType($request->type);
        $academic_institution->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'description' => $request->description,
            'place' => $place->id,
            'type' => $type->id,
            ]);
        Session::flash('flash_message', 'Institucion academica actualizada correctamente');
        $places = Place::where('type', '=', 1)
                            ->where('id','!=',$academic_institution->place)
                            ->get();
        $my_place = Place::where('id',$academic_institution->place)
                             ->first();
        $type_universitys = TypeOfAcademicInstitution::where('id','!=',$academic_institution->type)
                        ->get();
        $my_type = TypeOfAcademicInstitution::where('id',$academic_institution->type)
                        ->first();

        return view('university.edit', compact('places', 'my_place' ,'academic_institution', 'my_type', 'type_universitys'));
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
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->type);
        $place = $this->getPlace($request->city);
        $type = $this->getType($request->type);
        //dd($type);
        $university = AcademicInstitution::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'description' => $request->description,
            'place' => $place->id,
            'type' => $type->id,
            ]);

        $academic_institutions = AcademicInstitution::all();
        return view('university.index', compact('academic_institutions'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $academic_institution = AcademicInstitution::where('id',$id)->first();
        if(Auth::user()->id == 1){
            $academic_institution->delete();
            return view('university.destroy');
        } else {
            return view('errors.validation');
        } 
    }


    private function getPlace($placeName){
        return Place::where('name',$placeName)
                        ->first();
    }
    private function getType($typeName){
        return TypeOfAcademicInstitution::where('value',$typeName)
                        ->first();
    }
}
