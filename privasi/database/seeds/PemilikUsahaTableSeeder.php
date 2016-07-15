<?php

use Illuminate\Database\Seeder;

class PemilikUsahaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pemilik_usaha')->insert([
            'id_users' => '4',
			'no_ktp' => '3274031505950017',
			'no_hp' => '08886263895',
			'alamat' => 'Jl. Angkasa No. 26 Cirebon',
			'tempat_lahir' => 'Cirebon',
			'tgl_lahir' => '1995-05-15',
			'gambar_ktp' => 'ktp-4.jpg',
			'gambar_foto' => 'foto-4.jpg',
			'status' => 'Aktif',
			'token' => '1234'
        ]);
    }
}
