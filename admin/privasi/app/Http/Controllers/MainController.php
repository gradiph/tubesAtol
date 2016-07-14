<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;
use Input;
use Redirect;

class MainController extends Controller
{
    public function home ()
	{
		if (Auth::user())
		{
			if (Auth::user()->level == 'Admin')
			{
				return view('home_admin');
			}
			else if (Auth::user()->level == 'SuperAdmin')
			{
				return view('home_sadmin');
			}
		}
		else 
		{
			return Redirect::to('login');
		}
	}
	public function login()
	{
		if (Auth::user())
		{
			return Redirect::to(URL('/'));
		}
		else 
		{
			return view('login');
		}
	}
	public function logout()
	{
		Auth::logout();
		return Redirect::to('login')->with('message','berhasil logout');
	}
	public function prosesLogin()
	{
		if (Auth::attempt(['email' => Input::get('email'), 'password' => Input::get('password')])) 
		{
			return Redirect::to(URL('/'));
		}
		else 
		{
			return Redirect::to('login')->with('message','salah username atau salah password');
		}
	}
}
