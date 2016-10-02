<?php

namespace alianza\Http\Controllers\Auth;

use alianza\User;
use alianza\Area;
use alianza\AcademicInstitution;
use Validator;
use alianza\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/'; //cambiar esta dirección para que ya cuando se logea cambia todo
    protected $username = 'username'; // Variable para la validación

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware($this->guestMiddleware(), ['except' => 'logout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'username' => 'required|max:255|unique:users|alpha_num',
            'fullname' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
            'type' => 'required',
            'academic_institution' => 'required',
            'termsConditions' => 'required',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        //dd(isset($data['notifications']));
        //dd($this->get_academic_institution($data['academic_institution'])); 
        $user = User::create([
            'username' => $data['username'],
            'fullname' => $data['fullname'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'type' => $data['type'],
            'academic_institution' => $this->get_academic_institution($data['academic_institution']),
        ]);
        //dd($data['area'][0]);
        if($user->type == 1){
         $user->areas()->attach($this->get_area($data['area'][0]));
         User::where('id',$user->id)
               ->update([
                    'receive_notifications' => isset($data['notifications'])  
                ]);   
        }
        return $user;
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
