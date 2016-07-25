<?php

namespace MunDocente\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Database\Eloquent\Model;
use MunDocente\Http\Requests;
use MunDocente\Http\Controllers\Controller;
use MunDocente\Http\Controllers\UserController;
use MunDocente\Publication;
use MunDocente\Area;
use MunDocente\Place;
use MunDocente\User;
use MunDocente\AcademicInstitution;
use Carbon\Carbon;
use Auth;
use DB;
use Session;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;


class AdminController extends Controller
{
     //Aqui debe ir el codigo para redireccionar al admin 
     //a las publicaciones de un usario
     //supongo que le entrara un parametro, que sera el id   
 
	public function index(){
		return view('read_user');
	}

	public function create_docent(){
        $academic_institutions = AcademicInstitution::orderBy('name', 'asc')
                                                    ->get();
        $areas = Area::all();
        return view('admin.create_docent', compact('academic_institutions','areas'));
    }

    public function create_publisher(){
        $academic_institutions = AcademicInstitution::orderBy('name', 'asc')
                                                    ->get();
        return view('admin.create_publisher', compact('academic_institutions'));
    }

    public function managepublications()
    {
        if (Auth::guest()){
        }else{
            $user = $this->getUser();
            if($user->type == 3){
                $users = $this->getUserPublication();
                //$publications =  mysql_num_rows(usr);
                $academic_institutions = AcademicInstitution::all();
                return view('admin.check_publications', compact('users','academic_institutions'));
            }
        }
    }

    public function get_publications_user($id){
            $user = User::where('id',$id)
                            ->first();
            $cont = 0;
            foreach ($user->publications as $publication) {
                $publications[$cont] = $publication;
                $cont+=1;
            }
            if($cont != 0){
                    $publications = $this->paginate($publications);    
                    return view('user.list_publications', compact('publications'));
            } else {
                $areas = Area::all();
                return view('without_area', compact('areas'));
            }                                        
    }

    public function ownpublications()
    {   
        if (Auth::guest()){
        }else{
            $user = $this->getUser();
            if($user->type == 3){
                $publications = $this->getPublicationAdmin();
                $areas = Area::all();
                return view('admin.own_publications', [
                'publications' => $publications,
                'areas' => $areas]);
            }
        }
    }

    private function getPublicationAdmin(){
        return $this->getUser()->publications()->paginate(2);
    }


    public function create(Request $request)
    {

    	$this->validate($request, [
             'username' => 'required|max:255|unique:users|alpha_num',
            'fullname' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
            'type' => 'required',
            'academic_institution' => 'required',
            'termsConditions' => 'required',
            ]);
        //dd(isset($data['notifications']));
        //dd($this->get_academic_institution($data['academic_institution'])); 
        $user = User::create([
            'username' => $request->username,
            'fullname' => $request->fullname,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'type' => $request->type,
            'academic_institution' => $this->get_academic_institution($request->academic_institution),
        ]);
        //dd($data['area'][0]);
        if($user->type == 1){
         $user->areas()->attach($this->get_area($request->area[0]));
         User::where('id',$user->id)
               ->update([
                    'receive_notifications' => isset($request->notifications)  
                ]);   
        }
        //dd($user);
        Session::flash('flash_message', 'Usuario '.$user->fullname.' creado correctamente');
         $academic_institutions = AcademicInstitution::orderBy('name', 'asc')
                                                    ->get();
        $areas = Area::all();
        return view('admin.create_docent', compact('academic_institutions','areas'));
    }

    private function get_area($area){
        $area = Area::where('name',$area)
                    ->select('id')
                    ->first();
        return $area->id;
    }

    private function get_academic_institution($academic_institution){
        $academic_institution = AcademicInstitution::where('name', '=', $academic_institution)
                                                    ->select('id')
                                                    ->first();
        return $academic_institution->id;                                           
    }

    private function getUser(){
        $users = User::with('typeOfUser', 'areas.publications')
                    ->where('id' ,'=', Auth::user()->id)
                    ->get();
            //dd($users);
            foreach ($users as $value) {
               $user = $value;
        }
        return $user;
    }

    private function getUserPublication(){
        $userPublications = User::where('type',2)
                                ->where('activedAdmin','!=',0)
                                ->get();
        return $userPublications;
   }

   private function paginate($resultPublications){
        $pageStart = \Request::get('page', 1);
        $perPage = 2;
        $offSet = ($pageStart * $perPage) - $perPage;       
        $itemsForCurrentPage = array_slice($resultPublications, $offSet, $perPage, true);
        $publications = new LengthAwarePaginator($itemsForCurrentPage, count($resultPublications), $perPage, Paginator::resolveCurrentPage(), array('path' => Paginator::resolveCurrentPath()));  
        return $publications;
    }
}

?>