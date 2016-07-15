<?php

use Illuminate\Database\Seeder;

class SkalaUsahaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('skala_usaha')->insert([
            'nama' => 'Mikro'
        ]);
        DB::table('skala_usaha')->insert([
            'nama' => 'Menengah'
        ]);
        DB::table('skala_usaha')->insert([
            'nama' => 'Makro'
        ]);
    }
}
