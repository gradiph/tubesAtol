<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'sadmin',
            'email' => 'sadmin@sigeo.com',
            'password' => bcrypt('sadmin'),
			'level' => 'SuperAdmin',
        ]);
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@sigeo.com',
            'password' => bcrypt('admin'),
			'level' => 'Admin',
        ]);
        DB::table('users')->insert([
            'name' => 'member',
            'email' => 'member@sigeo.com',
            'password' => bcrypt('member'),
			'level' => 'Member',
        ]);
    }
}
