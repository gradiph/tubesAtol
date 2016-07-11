<?php

use Illuminate\Database\Seeder;

class MarkersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('markers')->insert([
            'nama' => 'Museum Benteng Vredeburg',
            'alamat' => 'Jl. Jend. A. Yani No.6 , Yogyakarta',
            'lat' => -7.800330,
            'lng' => 110.365967,
			'tipe' => 'museum',
        ]);
    }
}
