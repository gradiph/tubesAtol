<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\validasiProsesLogin;
use Auth;
use DB;
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
				$data_tunggu = DB::table('pemilik_usaha')
								->join('users', 'pemilik_usaha.id_users', '=','users.id')
								->select('pemilik_usaha.id as id',
										'users.id as idUsers',
										'users.name as nama',
										'users.email as email',
										'pemilik_usaha.no_ktp as no_ktp',
										'pemilik_usaha.no_hp as no_hp',
										'pemilik_usaha.alamat as alamat',
										'pemilik_usaha.tempat_lahir as tempat_lahir',
										'pemilik_usaha.tgl_lahir as tgl_lahir',
										'pemilik_usaha.gambar_ktp as gambar_ktp',
										'pemilik_usaha.token as token',
										'pemilik_usaha.status as status')
								->where('pemilik_usaha.status','=','Menunggu')
								->orderBy('users.name', 'asc')
								->get(1);
					return view('home_admin')->with('data_tunggu',$data_tunggu);
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
	public function prosesLogin(validasiProsesLogin $validasi)
	{
		if (Auth::attempt(['username' => Input::get('username'), 'password' => Input::get('password')])) 
		{
			return Redirect::to(URL('/'));
		}
		else 
		{
			return Redirect::to('login')->with('message','salah username atau salah password');
		}
	}
}
