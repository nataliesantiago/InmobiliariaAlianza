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
use Carbon\Carbon;
use Auth;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;

class IndexController extends Controller
{
	public function index(){
		return view('read_user');
	}
}

?>