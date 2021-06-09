<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'=> 'rivero',
            'email'=> 'rivero.novelino@gmail.com',
            'password'=> bcrypt('rivero'),
            'nohp'=> '0812312323',
            'role_id' => 2,
        ]);
        DB::table('users')->insert([
            'name'=> 'zaelani',
            'email'=> 'mzaelani@gmail.com',
            'password'=> bcrypt('zaehomo1'),
            'nohp'=> '0823232231',
            'role_id' => 2,
        ]);
        DB::table('users')->insert([
            'name'=> 'admin',
            'email'=> 'admin@admin.com',
            'password'=> bcrypt('adminadmin'),
            'nohp'=> '0823232231',
            'role_id' => 1,
        ]);
    }
}
