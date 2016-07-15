<?php

use Illuminate\Database\Seeder;

class KecamatanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kecamatan')->insert([
            'nama' => 'Lembang',
            'kode_pos' => '40391'
        ]);
        DB::table('kecamatan')->insert([
            'nama' => 'Cisarua',
            'kode_pos' => '40551'
        ]);
        DB::table('kecamatan')->insert([
            'nama' => 'Ngamprah',
            'kode_pos' => '40552'
        ]);
        DB::table('kecamatan')->insert([
            'nama' => 'Padalarang',
            'kode_pos' => '40553'
        ]);
        DB::table('kecamatan')->insert([
            'nama' => 'Cipatat',
            'kode_pos' => '40554'
        ]);
        DB::table('kecamatan')->insert([
            'nama' => 'Cikalong Wetan',
            'kode_pos' => '40556'
        ]);
        DB::table('kecamatan')->insert([
            'nama' => 'Cipeundeuy',
            'kode_pos' => '40558'
        ]);
        DB::table('kecamatan')->insert([
            'nama' => 'Parongpong',
            'kode_pos' => '40559'
        ]);
        DB::table('kecamatan')->insert([
            'nama' => 'Batujajar',
            'kode_pos' => '40561'
        ]);
        DB::table('kecamatan')->insert([
            'nama' => 'Saguling',
            'kode_pos' => '40561'
        ]);
        DB::table('kecamatan')->insert([
            'nama' => 'Cihampelas',
            'kode_pos' => '40562'
        ]);
        DB::table('kecamatan')->insert([
            'nama' => 'Cililin',
            'kode_pos' => '40562'
        ]);
        DB::table('kecamatan')->insert([
            'nama' => 'Sindangkerta',
            'kode_pos' => '40563'
        ]);
        DB::table('kecamatan')->insert([
            'nama' => 'Cipongkor',
            'kode_pos' => '40564'
        ]);
        DB::table('kecamatan')->insert([
            'nama' => 'Gununghalu',
            'kode_pos' => '40565'
        ]);
        DB::table('kecamatan')->insert([
            'nama' => 'Rongga',
            'kode_pos' => '40566'
        ]);
    }
}
