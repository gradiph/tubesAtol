<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use DB;
use Input;
use Redirect;

class WilayahController extends Controller
{
    public function home()
	{
		$data_kec = DB::table('kecamatan')
					->orderBy('nama', 'asc')
					->get();
		$data_kel = DB::table('kelurahan')
					->join('kecamatan', 'kelurahan.id_kecamatan', '=','kecamatan.id')
					->select('kelurahan.id as idKel',
							'kelurahan.nama as namaKel',
							'kecamatan.id as idKec',
							'kecamatan.nama as namaKec')
					->orderBy('namaKec', 'asc')
					->orderBy('namaKel', 'asc')
					->get();
		return view('wilayah_home')->with('kel',$data_kel)
									->with('kec',$data_kec);
	}
	public function tambahKecamatan()
	{
		return view('wilayah_tambah_kecamatan');
	}
	public function prosesTambahKecamatan()
	{
		$data = [
			'nama' => Input::get('nama'),
			'kode_pos' => Input::get('kode_pos')
		];
		DB::table('kecamatan')->insertGetId($data);
		return Redirect::to('wilayah')->with('message','Berhasil menambah Kecamatan ' . Input::get('nama'));
	}
	public function ubahKecamatan($id)
	{
		$data_kec = DB::table('kecamatan')
					->where('id','=',$id)
					->first();
		return view('wilayah_ubah_kecamatan')->with('kec',$data_kec);
	}
	public function prosesUbahKecamatan($id)
	{
		$data = [
			'nama' => Input::get('nama'),
			'kode_pos' => Input::get('kode_pos')
		];
		DB::table('kecamatan')->where('id','=',Input::get('id'))->update($data);
		return Redirect::to('wilayah')->with('message','Berhasil mengubah Kecamatan ' . Input::get('nama'));
	}
	public function hapusKecamatan($id)
	{
		$data_kec = DB::table('kecamatan')
					->where('id','=',$id)
					->first();
		return view('wilayah_hapus_kecamatan')->with('kec',$data_kec);
	}
	public function prosesHapusKecamatan()
	{
		DB::table('kecamatan')->where('id','=',Input::get('id'))->delete();
		return Redirect::to('wilayah')->with('message','Berhasil menghapus Kecamatan ' . Input::get('nama'));
	}
	public function tambahKelurahan($id_kec)
	{
		$data_kec = DB::table('kecamatan')
					->orderBy('nama', 'asc')
					->get();
		return view('wilayah_tambah_kelurahan')->with('kec',$data_kec)->with('id_kec',$id_kec);
	}
	public function prosesTambahKelurahan()
	{
		$data = [
			'nama' => Input::get('nama'),
			'id_kecamatan' => Input::get('kecamatan')
		];
		DB::table('kelurahan')->insertGetId($data);
		return Redirect::to('wilayah')->with('message','Berhasil menambah Kelurahan ' . Input::get('nama'));
	}
	public function ubahKelurahan($id_kec,$id_kel)
	{
		$data_kec = DB::table('kecamatan')
					->orderBy('nama', 'asc')
					->get();
		$data_kel = DB::table('kelurahan')
					->join('kecamatan', 'kelurahan.id_kecamatan', '=','kecamatan.id')
					->select('kelurahan.id as idKel',
							'kelurahan.nama as namaKel',
							'kecamatan.id as idKec',
							'kecamatan.nama as namaKec')
					->where('kelurahan.id','=',$id_kel)
					->first();
		return view('wilayah_ubah_kelurahan')->with('kel',$data_kel)
											->with('kec',$data_kec);
	}
	public function prosesUbahKelurahan($id)
	{
		$data = [
			'nama' => Input::get('nama'),
			'id_kecamatan' => Input::get('kecamatan')
		];
		DB::table('kelurahan')->where('id','=',Input::get('id'))->update($data);
		return Redirect::to('wilayah')->with('message','Berhasil mengubah Kelurahan ' . Input::get('nama'));
	}
	public function hapusKelurahan($id_kec,$id_kel)
	{
		$data_kec = DB::table('kecamatan')
					->orderBy('nama', 'asc')
					->get();
		$data_kel = DB::table('kelurahan')
					->join('kecamatan', 'kelurahan.id_kecamatan', '=','kecamatan.id')
					->select('kelurahan.id as idKel',
							'kelurahan.nama as namaKel',
							'kecamatan.id as idKec',
							'kecamatan.nama as namaKec')
					->where('kelurahan.id','=',$id_kel)
					->first();
		return view('wilayah_hapus_kelurahan')->with('kel',$data_kel)
											->with('kec',$data_kec);
	}
	public function prosesHapusKelurahan()
	{
		DB::table('kelurahan')->where('id','=',Input::get('id'))->delete();
		return Redirect::to('wilayah')->with('message','Berhasil menghapus Kelurahan ' . Input::get('nama'));
	}
}
