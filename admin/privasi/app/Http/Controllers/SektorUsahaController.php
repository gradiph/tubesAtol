<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
use Redirect;
use Input;

class SektorUsahaController extends Controller
{
    public function home()
	{
		$data = DB::table('sektor_usaha')
					->orderBy('nama', 'asc')
					->paginate(25);
		return view('sektor_usaha_home')->with('sektor',$data);
	}
	public function tambahSektor()
	{
		return view('sektor_usaha_tambah');
	}
	public function prosesTambahSektor()
	{
		$data = [
			'nama' => Input::get('nama')
		];
		DB::table('sektor_usaha')->insertGetId($data);
		return Redirect::to('sektor-usaha')->with('message','Berhasil menambah sektor usaha ' . Input::get('nama'));
	}
	public function ubahSektor($id)
	{
		$data = DB::table('sektor_usaha')
					->where('id','=',$id)
					->first();
		return view('sektor_usaha_ubah')->with('sektor',$data);
	}
	public function prosesUbahSektor($id)
	{
		$data = [
			'nama' => Input::get('nama')
		];
		DB::table('sektor_usaha')->where('id','=',Input::get('id'))->update($data);
		return Redirect::to('sektor-usaha')->with('message','Berhasil mengubah sektor usaha ' . Input::get('nama'));
	}
	public function hapusSektor($id)
	{
		$data = DB::table('sektor_usaha')
					->where('id','=',$id)
					->first();
		return view('sektor_usaha_hapus')->with('sektor',$data);
	}
	public function prosesHapusSektor()
	{
		DB::table('sektor_usaha')->where('id','=',Input::get('id'))->delete();
		return Redirect::to('sektor-usaha')->with('message','Berhasil menghapus sektor usaha ' . Input::get('nama'));
	}
}
