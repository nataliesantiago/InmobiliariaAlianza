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
use Auth;
use Mail;

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
       
    }

    public function forget(){

        return view('auth.reset');

    }

    public function desactived_me(){
        $id = Auth::user()->id;
        DB::table('users')
                    ->where('id', '=', $id)
                    ->update([
                        'activedMe' => false                
                        ]);
        $user = User::where('id', '=', $id)
                    ->get();
        //dd($user);
        Session::flash('flash_message', 'Cuenta desactivada sin problemas.');
        return $this->edit($id);
    }

    public function actived_admin($id){
      DB::table('users')
          ->where('id', '=', $id)
          ->update([
                'activedAdmin' => true                
              ]);
      $user = User::where('id', '=', $id)
                    ->first();
      //enviar mensaje al publicdor de que ya fue activado
      Mail::send('emails.actived_admin', ['text' => 'Tu usuario de MunDocente ha sido activado por parte del adminsitrador, para que hagas uso pleno de tu cuenta'], function($msj) use ($user){
            $msj->subject('Activación de tu cuenta: '.$user->username);
            $msj->to($user->email);
      });
        return view('user.state_count', compact('user'));   
     }

    public function desactived_admin($id){
        DB::table('users')
          ->where('id', '=', $id)
          ->update([
                'activedAdmin' => false                
              ]);
      $user = User::where('id', '=', $id)
                    ->first();
      Mail::send('emails.actived_admin', ['text' => 'Tu usuario de MunDocente ha sido desactivado, para más información comunicate con el administrador'], function($msj) use ($user){
            $msj->subject('Desactivación de tu cuenta: '.$user->username);
            $msj->to($user->email);
      });
        return view('user.state_count', compact('user'));
    }

    public function actived_me(){
        $id = Auth::user()->id;
        DB::table('users')
                    ->where('id', '=', $id)
                    ->update([
                        'activedMe' => true                
                        ]);
        $user = User::where('id', '=', $id)
                    ->get();
        //dd($user);
        Session::flash('flash_message', 'Cuenta activada correctamente.');
        return $this->edit($id);
    }
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::findOrFail($id);
        //dd($user);
        $areas = Area::all();
        $academic_institutions = AcademicInstitution::orderBy('name', 'asc')
                                                    ->get();
        //dd($user);                                                  
        return view('user.read_user', compact('user','areas','academic_institutions'));
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
                    ->first();

        $areas = Area::all();

        $academic_institutions = AcademicInstitution::orderBy('name', 'asc')
                                                    ->get();
        //dd($user);
        if($user->type != 3){
          if($user->type == 1){
            $name = $this->get_areas($user);  
          }
          return view('user.edit', compact('user', 'areas', 'academic_institutions', 'name'));
        }else {
          return view('errors.edit_admin');
        }
    }

    private function save_areas($user, $areas){
        if($user->type == 1){
              $user->areas()->detach(); 
              $areas = $areas; 
              $areas = $this->getAreasSelected($areas);
              foreach ($areas as $area) {
                  $user->areas()->attach($area); 
              }
          }
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
        $this->validate($request, [
            'fullname' => 'required|max:255',
            'email' => 'required|email|max:255',
            'academic_institution' => 'required',
            'photo' => 'mimes:jpg,jpeg,png|max:100', //kb
            ]);

        $this->updateData($request, $id, $this->get_id_academic_institution($request->input('academic_institution')));
      
        $user = User::with('areas')
                    ->where('id',$id)
                    ->first();
        $this->save_areas($user, $request->input('area'));
        
        if($user->type == 1){
        $name = $this->get_areas($user);  
        }
        $areas = Area::all();
        $academic_institutions = AcademicInstitution::orderBy('name', 'asc')
                                                    ->get();
        Session::flash('flash_message', 'Usuario actualizado correctamente');
        return view('user.edit', compact('user', 'areas', 'name','academic_institutions'));
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
            $area = Area::where('id', '=', $areaId)
                            ->select('id')
                            ->first();
            $selectedArea[$cont] = $area->id;
            $cont += 1;
          }
         else {
            $area = Area::where('name', '=', $areaId)
                            ->select('id', 'name')
                            ->first();
            $selectedArea[$cont] = $area->id;
            $cont += 1;      
         //   dd($areas[1]); //Arreglos de areas seleccionadas en numeros :D
             }
        }           
        return $selectedArea;
      }

      private function updateData($request, $id, $academic_institution){

        if(!(is_null($request->file('photo')))){

          //foto del usuario
          $photo = $request->file('photo');
          //$upload = 'uploads/photo/'.$id;
          $upload = 'uploads/photo/'.$id;
          $file_name = $photo->getClientOriginalName();
          $success = $photo->move($upload, $file_name);

           User::where('id', '=', $id)
                    ->update([
                        'fullname' => $request->input('fullname'),
                        'email' => $request->input('email'),
                        'academic_institution' => $academic_institution,
                        'phone' => $request->input('phone'),
                        'contact' => $request->input('contact'),
                        'photo' => $file_name
                        ]);
        } else {
           User::where('id', '=', $id)
                    ->update([
                        'fullname' => $request->input('fullname'),
                        'email' => $request->input('email'),
                        'academic_institution' => $academic_institution,
                        'phone' => $request->input('phone'),
                        'contact' => $request->input('contact')
                        ]);
        }  
    }

    private function get_id_academic_institution($academic_institution){
      $academic_instituion = AcademicInstitution::where('name',$academic_institution)
                                                    ->select('id')
                                                    ->first();
      return $academic_instituion->id;                                    
    }

    private function get_areas($user){
        $areasUser = $user->areas()->select('name')->get();
        $cont = 0;
        foreach ($areasUser as $collection) {
                $name[$cont] = $collection->name;
                $cont += 1;
        }
        return $name;
    }
}
