<?php

namespace MunDocente\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use MunDocente\Http\Requests;
use MunDocente\Http\Controllers\Controller;
use MunDocente\Publication;
use MunDocente\Area;
use MunDocente\Place;
use MunDocente\User;
use MunDocente\AcademicInstitution;
use Carbon\Carbon;
use Auth;
use Session;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;


class AdminController extends Controller
{
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
}

?>