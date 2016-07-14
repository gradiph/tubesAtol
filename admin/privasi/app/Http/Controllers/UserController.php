<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;

class UserController extends Controller
{
    public function setting($id)
	{
		$data = DB::table('users')->where('id','=',$id)->first();
		return view('user_setting')->with('user',$data);
	}
}
