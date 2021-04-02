<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class HistorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('histories')->insert([
            ['device_id'=> '1', 'pemakaian' => '30.2', 'tanggal_pemakaian' => '2021-3-20'],
            ['device_id'=> '1', 'pemakaian' => '124.4', 'tanggal_pemakaian' => '2021-3-21'],
            ['device_id'=> '1', 'pemakaian' => '320.7', 'tanggal_pemakaian' => '2021-3-22'],
            ['device_id'=> '1', 'pemakaian' => '120.6', 'tanggal_pemakaian' => '2021-3-23'],
            ['device_id'=> '1', 'pemakaian' => '220.4', 'tanggal_pemakaian' => '2021-3-24'],
            ['device_id'=> '1', 'pemakaian' => '540.1', 'tanggal_pemakaian' => '2021-3-25'],
            ['device_id'=> '1', 'pemakaian' => '320.3', 'tanggal_pemakaian' => '2021-3-26'],
            ['device_id'=> '1', 'pemakaian' => '420.2', 'tanggal_pemakaian' => '2021-3-27'],
        ]);
        DB::table('histories')->insert([
            ['device_id'=> '2', 'pemakaian' => '50.2', 'tanggal_pemakaian' => '2021-3-20'],
            ['device_id'=> '2', 'pemakaian' => '124.4', 'tanggal_pemakaian' => '2021-3-21'],
            ['device_id'=> '2', 'pemakaian' => '320.7', 'tanggal_pemakaian' => '2021-3-22'],
            ['device_id'=> '2', 'pemakaian' => '60.6', 'tanggal_pemakaian' => '2021-3-23'],
            ['device_id'=> '2', 'pemakaian' => '120.4', 'tanggal_pemakaian' => '2021-3-24'],
            ['device_id'=> '2', 'pemakaian' => '340.1', 'tanggal_pemakaian' => '2021-3-25'],
            ['device_id'=> '2', 'pemakaian' => '220.3', 'tanggal_pemakaian' => '2021-3-26'],
            ['device_id'=> '2', 'pemakaian' => '120.2', 'tanggal_pemakaian' => '2021-3-27'],
        ]);
    }
}
