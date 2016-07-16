<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use DB;
use Input;
use Redirect;

class UsahaController extends Controller
{
    public function home()
	{
		$data = DB::table('usaha')
					->join('pemilik_usaha', 'usaha.id_pemilik', '=','pemilik_usaha.id')
					->join('users', 'pemilik_usaha.id_users', '=','users.id')
					->join('skala_usaha', 'usaha.id_skala', '=','skala_usaha.id')
					->join('sektor_usaha', 'usaha.id_sektor', '=','sektor_usaha.id')
					->join('kelurahan', 'usaha.id_kelurahan', '=','kelurahan.id')
					->join('kecamatan', 'kelurahan.id_kecamatan', '=','kecamatan.id')
					->select('usaha.id as id',
							'pemilik_usaha.id as idPemilik',
							'users.id as idUsers',
							'users.name as namaUsers',
							'usaha.nama as namaUsaha',
							'usaha.alamat as alamat',
							'usaha.lat as lat',
							'usaha.lng as lng',
							'usaha.telepon as telepon',
							'usaha.produk_unggulan as produk_unggulan',
							'usaha.deskripsi as deskripsi',
							'usaha.gambar_foto as gambar_foto',
							'sektor_usaha.nama as sektor',
							'skala_usaha.nama as skala',
							'kecamatan.nama as namaKec',
							'kelurahan.nama as namaKel',
							'usaha.status as status')
					->where('usaha.status','!=','Menunggu')
					->orderBy('usaha.status', 'asc')
					->orderBy('usaha.nama', 'asc')
					->paginate(25);
		$data_tunggu = DB::table('usaha')
					->join('pemilik_usaha', 'usaha.id_pemilik', '=','pemilik_usaha.id')
					->join('users', 'pemilik_usaha.id_users', '=','users.id')
					->join('skala_usaha', 'usaha.id_skala', '=','skala_usaha.id')
					->join('sektor_usaha', 'usaha.id_sektor', '=','sektor_usaha.id')
					->join('kelurahan', 'usaha.id_kelurahan', '=','kelurahan.id')
					->join('kecamatan', 'kelurahan.id_kecamatan', '=','kecamatan.id')
					->select('usaha.id as id',
							'pemilik_usaha.id as idPemilik',
							'users.id as idUsers',
							'users.name as namaUsers',
							'usaha.nama as namaUsaha',
							'usaha.alamat as alamat',
							'usaha.lat as lat',
							'usaha.lng as lng',
							'usaha.telepon as telepon',
							'usaha.produk_unggulan as produk_unggulan',
							'usaha.deskripsi as deskripsi',
							'usaha.gambar_foto as gambar_foto',
							'sektor_usaha.nama as sektor',
							'skala_usaha.nama as skala',
							'kecamatan.nama as namaKec',
							'kelurahan.nama as namaKel',
							'usaha.status as status')
					->where('usaha.status','=','Menunggu')
					->orderBy('usaha.status', 'asc')
					->orderBy('usaha.nama', 'asc')
					->get(5);
		return view('usaha_home')->with('data',$data)
								->with('data_tunggu',$data_tunggu);
	}
	public function aktifkan($id)
	{
		$nama = DB::table('usaha')
					->where('usaha.id','=',$id)
					->first();
		$data = [
			'status' => 'Aktif'
		];
		DB::table('usaha')
					->where('id','=',$id)
					->update($data);
		return Redirect::to('data-usaha')->with('message','Berhasil mengaktifkan usaha ' . $nama->nama);
	}
	public function nonAktifkan($id)
	{
		$nama = DB::table('usaha')
					->where('usaha.id','=',$id)
					->first();
		$data = [
			'status' => 'Non-Aktif'
		];
		DB::table('usaha')
					->where('id','=',$id)
					->update($data);
		return Redirect::to('data-usaha')->with('message','Berhasil menon-aktifkan usaha ' . $nama->nama);
	}
	public function ubah($id)
	{
		$users = DB::table('pemilik_usaha')
					->join('users', 'pemilik_usaha.id_users', '=','users.id')
					->select('pemilik_usaha.id as id',
							'users.id as idUsers',
							'users.name as nama')
					->orderBy('users.name','asc')
					->get();
		$sektor = DB::table('sektor_usaha')
					->orderBy('nama','asc')
					->get();
		$skala = DB::table('skala_usaha')
					->orderBy('nama','asc')
					->get();
		$kecamatan = DB::table('kecamatan')
					->orderBy('nama','asc')
					->get();
		$data = DB::table('usaha')
					->join('pemilik_usaha', 'usaha.id_pemilik', '=','pemilik_usaha.id')
					->join('users', 'pemilik_usaha.id_users', '=','users.id')
					->join('skala_usaha', 'usaha.id_skala', '=','skala_usaha.id')
					->join('sektor_usaha', 'usaha.id_sektor', '=','sektor_usaha.id')
					->join('kelurahan', 'usaha.id_kelurahan', '=','kelurahan.id')
					->join('kecamatan', 'kelurahan.id_kecamatan', '=','kecamatan.id')
					->select('usaha.id as id',
							'pemilik_usaha.id as idPemilik',
							'users.id as idUsers',
							'usaha.id_skala as idSkala',
							'usaha.id_sektor as idSektor',
							'usaha.id_kelurahan as idKel',
							'kelurahan.id_kecamatan as idKec',
							'users.name as namaUsers',
							'usaha.nama as namaUsaha',
							'usaha.alamat as alamat',
							'usaha.lat as lat',
							'usaha.lng as lng',
							'usaha.telepon as telepon',
							'usaha.produk_unggulan as produk_unggulan',
							'usaha.deskripsi as deskripsi',
							'usaha.gambar_foto as gambar_foto',
							'sektor_usaha.nama as sektor',
							'skala_usaha.nama as skala',
							'kecamatan.nama as namaKec',
							'kelurahan.nama as namaKel',
							'usaha.status as status')
					->where('usaha.id','=',$id)
					->first();
		return view('usaha_ubah')->with('data',$data)
								->with('users',$users)
								->with('sektor',$sektor)
								->with('skala',$skala)
								->with('kecamatan',$kecamatan);
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
		DB::table('usaha')->where('id','=',Input::get('id'))->update($data);
		return Redirect::to('pemilik-usaha')->with('message','Berhasil mengubah akun ' . Input::get('nama'));
	}
	public function hapus($id)
	{
		$data = DB::table('usaha')
					->join('pemilik_usaha', 'usaha.id_pemilik', '=','pemilik_usaha.id')
					->join('users', 'pemilik_usaha.id_users', '=','users.id')
					->join('skala_usaha', 'usaha.id_skala', '=','skala_usaha.id')
					->join('sektor_usaha', 'usaha.id_sektor', '=','sektor_usaha.id')
					->join('kelurahan', 'usaha.id_kelurahan', '=','kelurahan.id')
					->join('kecamatan', 'kelurahan.id_kecamatan', '=','kecamatan.id')
					->select('usaha.id as id',
							'pemilik_usaha.id as idPemilik',
							'users.id as idUsers',
							'users.name as namaUsers',
							'usaha.nama as namaUsaha',
							'usaha.alamat as alamat',
							'usaha.lat as lat',
							'usaha.lng as lng',
							'usaha.telepon as telepon',
							'usaha.produk_unggulan as produk_unggulan',
							'usaha.deskripsi as deskripsi',
							'usaha.gambar_foto as gambar_foto',
							'sektor_usaha.nama as sektor',
							'skala_usaha.nama as skala',
							'kecamatan.nama as namaKec',
							'kelurahan.nama as namaKel',
							'usaha.status as status')
					->where('usaha.id','=',$id)
					->first();
		return view('usaha_hapus')->with('data',$data);
	}
	public function prosesHapus()
	{
		DB::table('usaha')->where('id','=',Input::get('id'))->delete();
		return Redirect::to('pemilik-usaha')->with('message','Berhasil menghapus akun ' . Input::get('nama'));
	}
}
