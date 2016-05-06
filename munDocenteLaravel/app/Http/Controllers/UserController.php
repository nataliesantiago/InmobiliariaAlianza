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
        $academic_institutions = AcademicInstitution::all();
        $areas = Area::whereNotNull('parent')
                    ->get();
        return view('user.create_docent', compact('academic_institutions','areas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $academic_institutions = AcademicInstitution::all();
        $areas = Area::whereNotNull('parent')
                    ->get();
        return view('user.create', compact('academic_institutions','areas'));
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
         $areas = Area::whereNotNull('parent')
                    ->get();
        $academic_institutions = AcademicInstitution::all();

        return view('user.edit', compact('user', 'areas', 'academic_institutions'));
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
        $this->authorize('owner', $user);
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
        $user = User::with('academicInstitution')
                    ->where('id','=',$id)
                    ->get();
         $areas = Area::whereNotNull('parent')
                    ->get();
        $academic_institutions = AcademicInstitution::all();

        Session::flash('flash_message', 'Usuario actualizado correctamente');
        return view('user.edit', compact('user', 'areas', 'academic_institutions'));
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
}
