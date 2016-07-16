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
			'username' => '10113214',
            'name' => 'sadmin',
            'email' => 'sadmin@sigeo.com',
            'password' => bcrypt('sadmin'),
			'level' => 'SuperAdmin',
        ]);
        DB::table('users')->insert([
			'username' => '110110150271',
            'name' => 'admin',
            'email' => 'admin@sigeo.com',
            'password' => bcrypt('admin'),
			'level' => 'Admin',
        ]);
        DB::table('users')->insert([
			'username' => 'member',
            'name' => 'member',
            'email' => 'member@sigeo.com',
            'password' => bcrypt('member'),
			'level' => 'Member',
        ]);
        DB::table('users')->insert([
			'username' => 'gradiph',
            'name' => 'Gradi',
            'email' => 'gradiph@gmail.com',
            'password' => bcrypt('gradiph'),
			'level' => 'Member',
        ]);
    }
}
