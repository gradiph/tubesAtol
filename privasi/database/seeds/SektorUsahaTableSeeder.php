<?php

use Illuminate\Database\Seeder;

class SektorUsahaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sektor_usaha')->insert([
            'nama' => 'Periklanan'
        ]);
        DB::table('sektor_usaha')->insert([
            'nama' => 'Arsitektur'
        ]);
        DB::table('sektor_usaha')->insert([
            'nama' => 'Pasar Barang Seni'
        ]);
        DB::table('sektor_usaha')->insert([
            'nama' => 'Kerajinan'
        ]);
        DB::table('sektor_usaha')->insert([
            'nama' => 'Desain'
        ]);
        DB::table('sektor_usaha')->insert([
            'nama' => 'Fashion'
        ]);
        DB::table('sektor_usaha')->insert([
            'nama' => 'Video'
        ]);
        DB::table('sektor_usaha')->insert([
            'nama' => 'Film dan Fotografi'
        ]);
        DB::table('sektor_usaha')->insert([
            'nama' => 'Permainan Interaktif'
        ]);
        DB::table('sektor_usaha')->insert([
            'nama' => 'Musik'
        ]);
        DB::table('sektor_usaha')->insert([
            'nama' => 'Seni Pertunjukan'
        ]);
        DB::table('sektor_usaha')->insert([
            'nama' => 'Penerbitan dan Percetakan'
        ]);
        DB::table('sektor_usaha')->insert([
            'nama' => 'Layanan Komputer dan Piranti Lunak'
        ]);
        DB::table('sektor_usaha')->insert([
            'nama' => 'Televisi dan Radio'
        ]);
        DB::table('sektor_usaha')->insert([
            'nama' => 'Riset dan Pengembang'
        ]);
        DB::table('sektor_usaha')->insert([
            'nama' => 'Kuliner'
        ]);
    }
}
