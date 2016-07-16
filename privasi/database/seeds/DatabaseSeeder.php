<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(KecamatanTableSeeder::class);
        $this->call(KelurahanTableSeeder::class);
        $this->call(SektorUsahaTableSeeder::class);
        $this->call(SkalaUsahaTableSeeder::class);
        $this->call(PemilikUsahaTableSeeder::class);
        $this->call(UsahaTableSeeder::class);
    }
}
