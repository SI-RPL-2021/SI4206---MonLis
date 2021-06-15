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
            'device_id'=> 'AML923',
            'device_name'=> 'Alat Monitor listrik',
            'device_version'=> '2.1.1',
            'deskripsi'=> 'Cabang Toko 1',
        ]);
        DB::table('devices')->insert([
            'user_id'=> '1',
            'device_id'=> 'AML132',
            'device_name'=> 'Alat setrum ceker',
            'device_version'=> '3.2.2',
            'deskripsi'=> 'Cabang Toko 2',
        ]);
        DB::table('devices')->insert([
            'user_id'=> '1',
            'device_id'=> 'AML351',
            'device_name'=> 'Alat setrum turbo',
            'device_version'=> '1.2.2',
            'deskripsi'=> 'Cabang Toko 3',
        ]);
        DB::table('devices')->insert([
            'user_id'=> '2',
            'device_id'=> 'AML132',
            'device_name'=> 'Alat Monitor listrik',
            'device_version'=> '1.2.1',
            'deskripsi'=> 'Kantor 1',
        ]);
    }
}
