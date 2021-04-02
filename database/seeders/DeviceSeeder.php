<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class DeviceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('devices')->insert([
            'user_id'=> '1',
            'device_name'=> 'Alat Monitor listrik',
            'device_version'=> 'XK003',
            'deskripsi'=> 'Memonitor automatis setiap harinya',
        ]);
        DB::table('devices')->insert([
            'user_id'=> '2',
            'device_name'=> 'Alat Monitor listrik',
            'device_version'=> 'KM001',
            'deskripsi'=> 'Memonitor automatis setiap harinya',
        ]);
    }
}
