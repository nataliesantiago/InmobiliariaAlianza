<?php

namespace MunDocente\Http\Controllers;

use Illuminate\Http\Request;

use MunDocente\Http\Requests;
use MunDocente\Http\Controllers\Controller;
use MunDocente\AcademicInstitution;
use MunDocente\User;
use MunDocente\Area;
use DB;
use Session;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function create_docent(){
        $academic_institutions = AcademicInstitution::orderBy('name', 'asc')
                                                    ->get();
        $areas = Area::all();
        return view('user.create_docent', compact('academic_institutions','areas'));
    }

    public function create_publisher(){
        $academic_institutions = AcademicInstitution::orderBy('name', 'asc')
                                                    ->get();
        return view('user.create_publisher', compact('academic_institutions'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $academic_institutions = AcademicInstitution::orderBy('name', 'asc')
                                                    ->get();
        $areas = Area::all();
        return view('user.create', compact('academic_institutions','areas'));
    }

    public function forget(){

        return view('auth.reset');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $user = User::with('academicInstitution')
                    ->where('id','=',$id)
                    ->get();

         $areas = Area::all();

        $academic_institutions = AcademicInstitution::orderBy('name', 'asc')
                                                    ->get();
        foreach ($user as $key) {
            $typeUser = $key->type;
        }
        if($typeUser == 1){
                foreach ($user as $key) {
                    $idUser = $key->id;
                }
                $areasUser = DB::table('area_user')
                            ->where('user_id', '=', $idUser)
                            ->select('area_id')
                            ->get();
                $cont = 0;
                foreach ($areasUser as $area) {
                    $areasUser[$cont] = Area::where('id', '=', $area->area_id)
                                        ->select('name')
                                        ->get();
                    $cont += 1;
                }
                $cont = 0;
                foreach ($areasUser as $collection) {
                    
                    foreach ($collection as $array) {
                        $name[$cont] = $array->name;
                        $cont += 1;
                    }
               }          
               // dd($name);
        } else {
        }
        return view('user.edit', compact('user','typeUser','name', 'areas', 'academic_institutions'));
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
        $user = User::with('academicInstitution')
                    ->where('id','=',$id)
                    ->get();
        //dd($request);
        //$this->authorize('owner', $user);
        $this->validate($request, [
            'fullname' => 'required|max:255',
            'email' => 'required|email|max:255',
            'academic_institution' => 'required',
            ]);

        $fullname = $request->input('fullname');
        $email = $request->input('email');
        $academic_institution = AcademicInstitution::where('name', '=', $request->input('academic_institution'))
                                                    ->select('id', 'name')
                                                    ->get();
        foreach ($academic_institution as $key) {
            $valueId = $key->id;
        }
        $phone = $request->input('phone');
        $contact = $request->input('contact');

        DB::table('users')
                    ->where('id', '=', $id)
                    ->update([
                        'fullname' => $fullname,
                        'email' => $email,
                        'academic_institution' => $valueId,
                        'phone' => $phone,
                        'contact' => $contact
                        ]);

        $user = User::with('academicInstitution','areas')
                    ->where('id','=',$id)
                    ->get();
        foreach ($user as $key) {
                $userOne = $key;
        }

        $typeUser = $userOne->type;
        if($typeUser == 1){
             $userOne->areas()->detach(); 
           $areas = $request->input('area'); 
            $areas = $this->getAreasSelected($areas);
            //dd($areas);//arreglo de areas seleccionadas en formato de numeros
            foreach ($areas as $area) {
                $userOne->areas()->attach($area); 
            }
        }

         $areasUser = DB::table('area_user')
                            ->where('user_id', '=', $userOne->id)
                            ->select('area_id')
                            ->get();
                $cont = 0;
                foreach ($areasUser as $area) {
                    $areasUser[$cont] = Area::where('id', '=', $area->area_id)
                                        ->select('name')
                                        ->get();
                    $cont += 1;
                }
                
               
                $cont = 0;
                foreach ($areasUser as $collection) {
                    
                    foreach ($collection as $array) {
                        $name[$cont] = $array->name;
                        $cont += 1;
                    }
               }          
               // dd($name);
        

         $areas = Area::all();
        $academic_institutions = AcademicInstitution::orderBy('name', 'asc')
                                                    ->get();

        Session::flash('flash_message', 'Usuario actualizado correctamente');
        return view('user.edit', compact('user', 'typeUser', 'areas', 'name','academic_institutions'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    private function getAreasSelected($areas){   
       $cont = 0;
        foreach ($areas as $areaId ) {
        if(is_numeric($areaId)){
            $idArea = Area::where('id', '=', $areaId)
                            ->select('id')
                            ->get();
            foreach ($idArea as $key2) {
                    $valueArea = $key2->id;             
            }
            //dd($valueArea);
            $selectedArea[$cont] = $valueArea;
            $cont += 1;
          }
         else {
            $idArea = Area::where('name', '=', $areaId)
                            ->select('id', 'name')
                            ->get();
            foreach ($idArea as $key2) {
                    $valueArea = $key2->id;             
            }
            $selectedArea[$cont] = $valueArea;
            $cont += 1;      
         //   dd($areas[1]); //Arreglos de areas seleccionadas en numeros :D
             }
        }           
        return $selectedArea;
      }
}
