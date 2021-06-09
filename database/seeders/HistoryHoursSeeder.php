<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Carbon\Carbon;
class HistoryHoursSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('history_hours')->insert([
            ['device_id'=> '1', 'pemakaian_energi' => '60.6', 'tanggal_pemakaian' => today(),'jam_pemakaian' => '5'],
            ['device_id'=> '1', 'pemakaian_energi' => '10.4', 'tanggal_pemakaian' => today(),'jam_pemakaian' => '6'],
            ['device_id'=> '1', 'pemakaian_energi' => '15.1', 'tanggal_pemakaian' => today(),'jam_pemakaian' => '7'],
            ['device_id'=> '1', 'pemakaian_energi' => '10.3', 'tanggal_pemakaian' => today(),'jam_pemakaian' => '8'],
            ['device_id'=> '1', 'pemakaian_energi' => '120.2', 'tanggal_pemakaian' => today(),'jam_pemakaian' => '9'],
            ['device_id'=> '1', 'pemakaian_energi' => '11.2', 'tanggal_pemakaian' => today(),'jam_pemakaian' => '10'],
            ['device_id'=> '1', 'pemakaian_energi' => '20.2', 'tanggal_pemakaian' => today(),'jam_pemakaian' => '11'],
            ['device_id'=> '1', 'pemakaian_energi' => '12.4', 'tanggal_pemakaian' => today(),'jam_pemakaian' => '12'],
            ['device_id'=> '1', 'pemakaian_energi' => '40.7', 'tanggal_pemakaian' => today(),'jam_pemakaian' => '13'],
            ['device_id'=> '1', 'pemakaian_energi' => '20.7', 'tanggal_pemakaian' => today(),'jam_pemakaian' => '14'],
            ['device_id'=> '1', 'pemakaian_energi' => '30.7', 'tanggal_pemakaian' => today(),'jam_pemakaian' => '15'],
            ['device_id'=> '1', 'pemakaian_energi' => '50.7', 'tanggal_pemakaian' => today(),'jam_pemakaian' => '16'],
            ['device_id'=> '1', 'pemakaian_energi' => '60.7', 'tanggal_pemakaian' => today(),'jam_pemakaian' => '17'],
            // ['device_id'=> '1', 'pemakaian_energi' => '70.7', 'tanggal_pemakaian' => today(),'jam_pemakaian' => '18'],
            // ['device_id'=> '1', 'pemakaian_energi' => '60.7', 'tanggal_pemakaian' => today(),'jam_pemakaian' => '19'],
            // ['device_id'=> '1', 'pemakaian_energi' => '70.7', 'tanggal_pemakaian' => today(),'jam_pemakaian' => '20'],
            // ['device_id'=> '1', 'pemakaian_energi' => '90.7', 'tanggal_pemakaian' => today(),'jam_pemakaian' => '21'],
            // ['device_id'=> '1', 'pemakaian_energi' => '40.7', 'tanggal_pemakaian' => today(),'jam_pemakaian' => '22'],
            // ['device_id'=> '1', 'pemakaian_energi' => '60.7', 'tanggal_pemakaian' => today(),'jam_pemakaian' => '23'],
            // ['device_id'=> '1', 'pemakaian_energi' => '40.7', 'tanggal_pemakaian' => today(),'jam_pemakaian' => '24'],
        ]);
        DB::table('history_hours')->insert([
            ['device_id'=> '1', 'pemakaian_energi' => '30.6', 'tanggal_pemakaian' => today()->subDays(7),'jam_pemakaian' => '5'],
            ['device_id'=> '1', 'pemakaian_energi' => '40.4', 'tanggal_pemakaian' => today()->subDays(7),'jam_pemakaian' => '6'],
            ['device_id'=> '1', 'pemakaian_energi' => '55.1', 'tanggal_pemakaian' => today()->subDays(7),'jam_pemakaian' => '7'],
            ['device_id'=> '1', 'pemakaian_energi' => '10.3', 'tanggal_pemakaian' => today()->subDays(7),'jam_pemakaian' => '8'],
            ['device_id'=> '1', 'pemakaian_energi' => '10.2', 'tanggal_pemakaian' => today()->subDays(7),'jam_pemakaian' => '9'],
            ['device_id'=> '1', 'pemakaian_energi' => '13.2', 'tanggal_pemakaian' => today()->subDays(7),'jam_pemakaian' => '10'],
            ['device_id'=> '1', 'pemakaian_energi' => '40.2', 'tanggal_pemakaian' => today()->subDays(7),'jam_pemakaian' => '11'],
            ['device_id'=> '1', 'pemakaian_energi' => '22.4', 'tanggal_pemakaian' => today()->subDays(7),'jam_pemakaian' => '12'],
            ['device_id'=> '1', 'pemakaian_energi' => '43.7', 'tanggal_pemakaian' => today()->subDays(7),'jam_pemakaian' => '13'],
            ['device_id'=> '1', 'pemakaian_energi' => '40.2', 'tanggal_pemakaian' => today()->subDays(7),'jam_pemakaian' => '14'],
            ['device_id'=> '1', 'pemakaian_energi' => '50.7', 'tanggal_pemakaian' => today()->subDays(7),'jam_pemakaian' => '15'],
            ['device_id'=> '1', 'pemakaian_energi' => '60.5', 'tanggal_pemakaian' => today()->subDays(7),'jam_pemakaian' => '16'],
            ['device_id'=> '1', 'pemakaian_energi' => '30.6', 'tanggal_pemakaian' => today()->subDays(7),'jam_pemakaian' => '17'],
            // ['device_id'=> '1', 'pemakaian_energi' => '50.7', 'tanggal_pemakaian' => today()->subDays(7),'jam_pemakaian' => '18'],
            // ['device_id'=> '1', 'pemakaian_energi' => '40.1', 'tanggal_pemakaian' => today()->subDays(7),'jam_pemakaian' => '19'],
            // ['device_id'=> '1', 'pemakaian_energi' => '20.3', 'tanggal_pemakaian' => today()->subDays(7),'jam_pemakaian' => '20'],
            // ['device_id'=> '1', 'pemakaian_energi' => '30.4', 'tanggal_pemakaian' => today()->subDays(7),'jam_pemakaian' => '21'],
            // ['device_id'=> '1', 'pemakaian_energi' => '30.5', 'tanggal_pemakaian' => today()->subDays(7),'jam_pemakaian' => '22'],
            // ['device_id'=> '1', 'pemakaian_energi' => '50.7', 'tanggal_pemakaian' => today()->subDays(7),'jam_pemakaian' => '23'],
            // ['device_id'=> '1', 'pemakaian_energi' => '30.9', 'tanggal_pemakaian' => today()->subDays(7),'jam_pemakaian' => '24'],
        ]);
    }
}
