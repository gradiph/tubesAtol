<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;
class MainController extends Controller
{
    public function formLogin ()
	{
		if (Auth::user())
		{
			return Redirect::to('/');
		}
		else
		{
			return view('login');
		}
	}
	public function index ()
	{
		return view('index');
	}
}
