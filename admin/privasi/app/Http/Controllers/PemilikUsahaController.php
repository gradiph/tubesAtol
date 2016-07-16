<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use DB;
use Input;
use Redirect;

class PemilikUsahaController extends Controller
{
    public function home()
	{
		$data = DB::table('pemilik_usaha')
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
					->where('pemilik_usaha.status','!=','Menunggu')
					->orderBy('users.name', 'asc')
					->paginate(25);
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
					->get(5);
		return view('pemilik_usaha_home')->with('data',$data)
										->with('data_tunggu',$data_tunggu);
	}
	public function aktifkan($id)
	{
		$nama = DB::table('pemilik_usaha')
					->join('users', 'pemilik_usaha.id_users', '=','users.id')
					->select('users.name as nama')
					->where('pemilik_usaha.id','=',$id)
					->first();
		$data = [
			'status' => 'Aktif'
		];
		DB::table('pemilik_usaha')
					->where('id','=',$id)
					->update($data);
		return Redirect::to('pemilik-usaha')->with('message','Berhasil mengaktifkan akun ' . $nama->nama);
	}
	public function nonAktifkan($id)
	{
		$nama = DB::table('pemilik_usaha')
					->join('users', 'pemilik_usaha.id_users', '=','users.id')
					->select('users.name as nama')
					->where('pemilik_usaha.id','=',$id)
					->first();
		$data = [
			'status' => 'Non-Aktif'
		];
		DB::table('pemilik_usaha')
					->where('id','=',$id)
					->update($data);
		return Redirect::to('pemilik-usaha')->with('message','Berhasil menon-aktifkan akun ' . $nama->nama);
	}
	public function ubah($id)
	{
		$data = DB::table('pemilik_usaha')
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
					->where('pemilik_usaha.id','=',$id)
					->first();
		return view('pemilik_usaha_ubah')->with('data',$data);
	}
	public function prosesUbah($id)
	{
		$data = [
			'name' => Input::get('nama'),
			'email' => Input::get('email')
		];
		DB::table('users')->where('id','=',Input::get('idUsers'))->update($data);
		$data = [
			'no_ktp' => Input::get('no_ktp'),
			'no_hp' => Input::get('no_hp'),
			'alamat' => Input::get('alamat'),
			'tempat_lahir' => Input::get('tempat_lahir'),
			'tgl_lahir' => Input::get('tgl_lahir'),
			'gambar_ktp' => Input::get('gambar_ktp'),
			'token' => Input::get('token')
		];
		DB::table('pemilik_usaha')->where('id','=',Input::get('id'))->update($data);
		return Redirect::to('pemilik-usaha')->with('message','Berhasil mengubah akun ' . Input::get('nama'));
	}
	public function hapus($id)
	{
		$data = DB::table('pemilik_usaha')
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
					->where('pemilik_usaha.id','=',$id)
					->first();
		return view('pemilik_usaha_hapus')->with('data',$data);
	}
	public function prosesHapus()
	{
		DB::table('pemilik_usaha')->where('id','=',Input::get('id'))->delete();
		return Redirect::to('pemilik-usaha')->with('message','Berhasil menghapus akun ' . Input::get('nama'));
	}
}
