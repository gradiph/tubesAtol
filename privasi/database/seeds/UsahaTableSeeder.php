<?php

use Illuminate\Database\Seeder;

class UsahaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('usaha')->insert([
			'id_pemilik' => '1',
            'nama' => 'Toko Kelontong',
			'alamat' => 'Jl. Cihampelas No 131 Bandung',
			'lat' => '-6.887354',
			'lng' => '107.604059',
			'telepon' => '08886263895',
			'produk_unggulan' => 'Indomie',
			'deskripsi' => 'Toko Kelontong menjual segala jenis barang keperluan sehari-hari.',
			'gambar_foto' => 'foto-4.jpg',
			'id_skala' => '1',
			'id_sektor' => '16',
			'id_kelurahan' => '102',
			'status' => 'Tidak Aktif'
        ]);
        DB::table('usaha')->insert([
			'id_pemilik' => '1',
            'nama' => 'Warung Indomie',
			'alamat' => 'Jl. Cihampelas No 129 Bandung',
			'lat' => '-6.887246',
			'lng' => '107.604074',
			'telepon' => '08886263895',
			'produk_unggulan' => 'Indomie',
			'deskripsi' => 'Warung Indomie menyediakan aneka rasa dan variasi dari Indomie.',
			'gambar_foto' => 'foto-4.jpg',
			'id_skala' => '2',
			'id_sektor' => '16',
			'id_kelurahan' => '102',
			'status' => 'Aktif'
        ]);
    }
}
