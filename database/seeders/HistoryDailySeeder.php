<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class HistoryDailySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $int= mt_rand(1262055681,1262055681);
        
        DB::table('history_dailies')->insert([
            ['device_id'=> '1', 'pemakaian_energi' => '600.2', 'tanggal_pemakaian' => '2021-5-1'],
            ['device_id'=> '1', 'pemakaian_energi' => '320.2', 'tanggal_pemakaian' => '2021-5-2'],
            ['device_id'=> '1', 'pemakaian_energi' => '420.2', 'tanggal_pemakaian' => '2021-5-3'],
            ['device_id'=> '1', 'pemakaian_energi' => '320.2', 'tanggal_pemakaian' => '2021-5-4'],
            ['device_id'=> '1', 'pemakaian_energi' => '220.2', 'tanggal_pemakaian' => '2021-5-5'],
            ['device_id'=> '1', 'pemakaian_energi' => '120.2', 'tanggal_pemakaian' => '2021-5-6'],
            ['device_id'=> '1', 'pemakaian_energi' => '220.2', 'tanggal_pemakaian' => '2021-5-7'],
            ['device_id'=> '1', 'pemakaian_energi' => '320.2', 'tanggal_pemakaian' => '2021-5-8'],
            ['device_id'=> '1', 'pemakaian_energi' => '420.2', 'tanggal_pemakaian' => '2021-5-9'],
            ['device_id'=> '1', 'pemakaian_energi' => '520.2', 'tanggal_pemakaian' => '2021-5-10'],
            ['device_id'=> '1', 'pemakaian_energi' => '120.2', 'tanggal_pemakaian' => '2021-5-11'],
            ['device_id'=> '1', 'pemakaian_energi' => '220.2', 'tanggal_pemakaian' => '2021-5-12'],
            ['device_id'=> '1', 'pemakaian_energi' => '320.2', 'tanggal_pemakaian' => '2021-5-13'],
            ['device_id'=> '1', 'pemakaian_energi' => '420.2', 'tanggal_pemakaian' => '2021-5-14'],
            ['device_id'=> '1', 'pemakaian_energi' => '520.2', 'tanggal_pemakaian' => '2021-5-15'],
            ['device_id'=> '1', 'pemakaian_energi' => '620.2', 'tanggal_pemakaian' => '2021-5-16'],
            ['device_id'=> '1', 'pemakaian_energi' => '120.2', 'tanggal_pemakaian' => '2021-5-17'],
            ['device_id'=> '1', 'pemakaian_energi' => '220.2', 'tanggal_pemakaian' => '2021-5-18'],
            ['device_id'=> '1', 'pemakaian_energi' => '120.2', 'tanggal_pemakaian' => '2021-5-19'],
            ['device_id'=> '1', 'pemakaian_energi' => '320.2', 'tanggal_pemakaian' => '2021-5-20'],
            ['device_id'=> '1', 'pemakaian_energi' => '124.4', 'tanggal_pemakaian' => '2021-5-21'],
            ['device_id'=> '1', 'pemakaian_energi' => '320.7', 'tanggal_pemakaian' => '2021-5-22'],
            ['device_id'=> '1', 'pemakaian_energi' => '120.6', 'tanggal_pemakaian' => '2021-5-23'],
            ['device_id'=> '1', 'pemakaian_energi' => '220.4', 'tanggal_pemakaian' => '2021-5-24'],
            ['device_id'=> '1', 'pemakaian_energi' => '540.1', 'tanggal_pemakaian' => '2021-5-25'],
            ['device_id'=> '1', 'pemakaian_energi' => '320.3', 'tanggal_pemakaian' => '2021-5-26'],
            ['device_id'=> '1', 'pemakaian_energi' => '420.2', 'tanggal_pemakaian' => '2021-5-27'],
            ['device_id'=> '1', 'pemakaian_energi' => '320.2', 'tanggal_pemakaian' => '2021-5-29'],
            ['device_id'=> '1', 'pemakaian_energi' => '220.2', 'tanggal_pemakaian' => '2021-5-30'],
            ['device_id'=> '1', 'pemakaian_energi' => '120.2', 'tanggal_pemakaian' => '2021-5-31'],
            ['device_id'=> '2', 'pemakaian_energi' => '20.2', 'tanggal_pemakaian' => '2021-5-26'],
            ['device_id'=> '2', 'pemakaian_energi' => '220.2', 'tanggal_pemakaian' => '2021-5-27'],
            ['device_id'=> '1', 'pemakaian_energi' => '120.2', 'tanggal_pemakaian' => '2021-2-21'],
            ['device_id'=> '1', 'pemakaian_energi' => '80.2', 'tanggal_pemakaian' => '2021-2-22'],
            ['device_id'=> '1', 'pemakaian_energi' => '40.2', 'tanggal_pemakaian' => '2021-2-23'],
            ['device_id'=> '1', 'pemakaian_energi' => '20.2', 'tanggal_pemakaian' => '2021-2-24'],
            ['device_id'=> '1', 'pemakaian_energi' => '34.2', 'tanggal_pemakaian' => '2021-2-25'],
            ['device_id'=> '1', 'pemakaian_energi' => '230.2', 'tanggal_pemakaian' => '2021-2-26'],
            ['device_id'=> '1', 'pemakaian_energi' => '130.2', 'tanggal_pemakaian' => '2021-2-27'],
            ['device_id'=> '1', 'pemakaian_energi' => '130.2', 'tanggal_pemakaian' => '2021-2-28'],
            ['device_id'=> '1', 'pemakaian_energi' => '600.2', 'tanggal_pemakaian' => '2021-3-1'],
            ['device_id'=> '1', 'pemakaian_energi' => '320.2', 'tanggal_pemakaian' => '2021-3-2'],
            ['device_id'=> '1', 'pemakaian_energi' => '420.2', 'tanggal_pemakaian' => '2021-3-3'],
            ['device_id'=> '1', 'pemakaian_energi' => '320.2', 'tanggal_pemakaian' => '2021-3-4'],
            ['device_id'=> '1', 'pemakaian_energi' => '220.2', 'tanggal_pemakaian' => '2021-3-5'],
            ['device_id'=> '1', 'pemakaian_energi' => '120.2', 'tanggal_pemakaian' => '2021-3-6'],
            ['device_id'=> '1', 'pemakaian_energi' => '220.2', 'tanggal_pemakaian' => '2021-3-7'],
            ['device_id'=> '1', 'pemakaian_energi' => '320.2', 'tanggal_pemakaian' => '2021-3-8'],
            ['device_id'=> '1', 'pemakaian_energi' => '420.2', 'tanggal_pemakaian' => '2021-3-9'],
            ['device_id'=> '1', 'pemakaian_energi' => '520.2', 'tanggal_pemakaian' => '2021-3-10'],
            ['device_id'=> '1', 'pemakaian_energi' => '120.2', 'tanggal_pemakaian' => '2021-3-11'],
            ['device_id'=> '1', 'pemakaian_energi' => '220.2', 'tanggal_pemakaian' => '2021-3-12'],
            ['device_id'=> '1', 'pemakaian_energi' => '320.2', 'tanggal_pemakaian' => '2021-3-13'],
            ['device_id'=> '1', 'pemakaian_energi' => '420.2', 'tanggal_pemakaian' => '2021-3-14'],
            ['device_id'=> '1', 'pemakaian_energi' => '520.2', 'tanggal_pemakaian' => '2021-3-15'],
            ['device_id'=> '1', 'pemakaian_energi' => '620.2', 'tanggal_pemakaian' => '2021-3-16'],
            ['device_id'=> '1', 'pemakaian_energi' => '120.2', 'tanggal_pemakaian' => '2021-3-17'],
            ['device_id'=> '1', 'pemakaian_energi' => '220.2', 'tanggal_pemakaian' => '2021-3-18'],
            ['device_id'=> '1', 'pemakaian_energi' => '120.2', 'tanggal_pemakaian' => '2021-3-19'],
            ['device_id'=> '1', 'pemakaian_energi' => '320.2', 'tanggal_pemakaian' => '2021-3-20'],
            ['device_id'=> '1', 'pemakaian_energi' => '124.4', 'tanggal_pemakaian' => '2021-3-21'],
            ['device_id'=> '1', 'pemakaian_energi' => '320.7', 'tanggal_pemakaian' => '2021-3-22'],
            ['device_id'=> '1', 'pemakaian_energi' => '120.6', 'tanggal_pemakaian' => '2021-3-23'],
            ['device_id'=> '1', 'pemakaian_energi' => '220.4', 'tanggal_pemakaian' => '2021-3-24'],
            ['device_id'=> '1', 'pemakaian_energi' => '540.1', 'tanggal_pemakaian' => '2021-3-25'],
            ['device_id'=> '1', 'pemakaian_energi' => '320.3', 'tanggal_pemakaian' => '2021-3-26'],
            ['device_id'=> '1', 'pemakaian_energi' => '420.2', 'tanggal_pemakaian' => '2021-3-27'],
            ['device_id'=> '1', 'pemakaian_energi' => '320.2', 'tanggal_pemakaian' => '2021-3-29'],
            ['device_id'=> '1', 'pemakaian_energi' => '220.2', 'tanggal_pemakaian' => '2021-3-30'],
            ['device_id'=> '1', 'pemakaian_energi' => '120.2', 'tanggal_pemakaian' => '2021-3-31'],
            ['device_id'=> '1', 'pemakaian_energi' => '600.2', 'tanggal_pemakaian' => '2021-4-1'],
            ['device_id'=> '1', 'pemakaian_energi' => '320.2', 'tanggal_pemakaian' => '2021-4-2'],
            ['device_id'=> '1', 'pemakaian_energi' => '420.2', 'tanggal_pemakaian' => '2021-4-3'],
            ['device_id'=> '1', 'pemakaian_energi' => '320.2', 'tanggal_pemakaian' => '2021-4-4'],
            ['device_id'=> '1', 'pemakaian_energi' => '220.2', 'tanggal_pemakaian' => '2021-4-5'],
            ['device_id'=> '1', 'pemakaian_energi' => '120.2', 'tanggal_pemakaian' => '2021-4-6'],
            ['device_id'=> '1', 'pemakaian_energi' => '220.2', 'tanggal_pemakaian' => '2021-4-7'],
            ['device_id'=> '1', 'pemakaian_energi' => '320.2', 'tanggal_pemakaian' => '2021-4-8'],
            ['device_id'=> '1', 'pemakaian_energi' => '420.2', 'tanggal_pemakaian' => '2021-4-9'],
            ['device_id'=> '1', 'pemakaian_energi' => '520.2', 'tanggal_pemakaian' => '2021-4-10'],
            ['device_id'=> '1', 'pemakaian_energi' => '120.2', 'tanggal_pemakaian' => '2021-4-11'],
            ['device_id'=> '1', 'pemakaian_energi' => '220.2', 'tanggal_pemakaian' => '2021-4-12'],
            ['device_id'=> '1', 'pemakaian_energi' => '320.2', 'tanggal_pemakaian' => '2021-4-13'],
            ['device_id'=> '1', 'pemakaian_energi' => '420.2', 'tanggal_pemakaian' => '2021-4-14'],
            ['device_id'=> '1', 'pemakaian_energi' => '520.2', 'tanggal_pemakaian' => '2021-4-15'],
            ['device_id'=> '1', 'pemakaian_energi' => '620.2', 'tanggal_pemakaian' => '2021-4-16'],
            ['device_id'=> '1', 'pemakaian_energi' => '120.2', 'tanggal_pemakaian' => '2021-4-17'],
            ['device_id'=> '1', 'pemakaian_energi' => '220.2', 'tanggal_pemakaian' => '2021-4-18'],
            ['device_id'=> '1', 'pemakaian_energi' => '120.2', 'tanggal_pemakaian' => '2021-4-19'],
            ['device_id'=> '1', 'pemakaian_energi' => '320.2', 'tanggal_pemakaian' => '2021-4-20'],
            ['device_id'=> '1', 'pemakaian_energi' => '420.2', 'tanggal_pemakaian' => '2021-4-21'],
            ['device_id'=> '1', 'pemakaian_energi' => '120.2', 'tanggal_pemakaian' => '2021-4-22'],
            ['device_id'=> '1', 'pemakaian_energi' => '220.2', 'tanggal_pemakaian' => '2021-4-23'],
            ['device_id'=> '1', 'pemakaian_energi' => '320.2', 'tanggal_pemakaian' => '2021-4-24'],
            ['device_id'=> '1', 'pemakaian_energi' => '420.2', 'tanggal_pemakaian' => '2021-4-25'],
            ['device_id'=> '1', 'pemakaian_energi' => '520.2', 'tanggal_pemakaian' => '2021-4-26'],
            ['device_id'=> '1', 'pemakaian_energi' => '120.2', 'tanggal_pemakaian' => '2021-4-27'],
            ['device_id'=> '1', 'pemakaian_energi' => '220.2', 'tanggal_pemakaian' => '2021-4-28'],
            ['device_id'=> '1', 'pemakaian_energi' => '320.2', 'tanggal_pemakaian' => '2021-4-29'],
            ['device_id'=> '1', 'pemakaian_energi' => '420.2', 'tanggal_pemakaian' => '2021-4-30'],
            ['device_id'=> '1', 'pemakaian_energi' => '1000.2', 'tanggal_pemakaian' => '2020-4-1'],
            ['device_id'=> '1', 'pemakaian_energi' => '620.2', 'tanggal_pemakaian' => '2020-4-2'],
            ['device_id'=> '1', 'pemakaian_energi' => '720.2', 'tanggal_pemakaian' => '2020-4-3'],
            ['device_id'=> '1', 'pemakaian_energi' => '320.2', 'tanggal_pemakaian' => '2020-4-4'],
            ['device_id'=> '1', 'pemakaian_energi' => '220.2', 'tanggal_pemakaian' => '2020-4-5'],
            ['device_id'=> '1', 'pemakaian_energi' => '420.2', 'tanggal_pemakaian' => '2020-4-6'],
            ['device_id'=> '1', 'pemakaian_energi' => '280.2', 'tanggal_pemakaian' => '2020-4-7'],
            ['device_id'=> '1', 'pemakaian_energi' => '320.2', 'tanggal_pemakaian' => '2020-4-8'],
            ['device_id'=> '1', 'pemakaian_energi' => '420.2', 'tanggal_pemakaian' => '2020-4-9'],
            ['device_id'=> '1', 'pemakaian_energi' => '520.2', 'tanggal_pemakaian' => '2020-4-10'],
            ['device_id'=> '1', 'pemakaian_energi' => '120.2', 'tanggal_pemakaian' => '2020-4-11'],
            ['device_id'=> '1', 'pemakaian_energi' => '220.2', 'tanggal_pemakaian' => '2020-4-12'],
            ['device_id'=> '1', 'pemakaian_energi' => '320.2', 'tanggal_pemakaian' => '2020-4-13'],
            ['device_id'=> '1', 'pemakaian_energi' => '420.2', 'tanggal_pemakaian' => '2020-4-14'],
            ['device_id'=> '1', 'pemakaian_energi' => '520.2', 'tanggal_pemakaian' => '2020-4-15'],
            ['device_id'=> '1', 'pemakaian_energi' => '620.2', 'tanggal_pemakaian' => '2020-4-16'],
            ['device_id'=> '1', 'pemakaian_energi' => '120.2', 'tanggal_pemakaian' => '2020-4-17'],
            ['device_id'=> '1', 'pemakaian_energi' => '320.2', 'tanggal_pemakaian' => '2020-4-18'],
            ['device_id'=> '1', 'pemakaian_energi' => '120.2', 'tanggal_pemakaian' => '2020-4-19'],
            ['device_id'=> '1', 'pemakaian_energi' => '620.2', 'tanggal_pemakaian' => '2020-4-20'],
            ['device_id'=> '1', 'pemakaian_energi' => '420.2', 'tanggal_pemakaian' => '2020-4-21'],
            ['device_id'=> '1', 'pemakaian_energi' => '620.2', 'tanggal_pemakaian' => '2020-4-22'],
            ['device_id'=> '1', 'pemakaian_energi' => '520.2', 'tanggal_pemakaian' => '2020-4-23'],
            ['device_id'=> '1', 'pemakaian_energi' => '320.2', 'tanggal_pemakaian' => '2020-4-24'],
            ['device_id'=> '1', 'pemakaian_energi' => '420.2', 'tanggal_pemakaian' => '2020-4-25'],
            ['device_id'=> '1', 'pemakaian_energi' => '520.2', 'tanggal_pemakaian' => '2020-4-26'],
            ['device_id'=> '1', 'pemakaian_energi' => '620.2', 'tanggal_pemakaian' => '2020-4-27'],
            ['device_id'=> '1', 'pemakaian_energi' => '420.2', 'tanggal_pemakaian' => '2020-4-28'],
            ['device_id'=> '1', 'pemakaian_energi' => '320.2', 'tanggal_pemakaian' => '2020-4-29'],
            ['device_id'=> '1', 'pemakaian_energi' => '420.2', 'tanggal_pemakaian' => '2020-4-30'],
            ['device_id'=> '2', 'pemakaian_energi' => '600.2', 'tanggal_pemakaian' => '2020-5-5'],
            ['device_id'=> '1', 'pemakaian_energi' => '120.2', 'tanggal_pemakaian' => '2020-5-6'],
            ['device_id'=> '1', 'pemakaian_energi' => '220.2', 'tanggal_pemakaian' => '2020-5-7'],
            ['device_id'=> '1', 'pemakaian_energi' => '320.2', 'tanggal_pemakaian' => '2020-5-8'],
            ['device_id'=> '1', 'pemakaian_energi' => '420.2', 'tanggal_pemakaian' => '2020-5-9'],
            ['device_id'=> '1', 'pemakaian_energi' => '520.2', 'tanggal_pemakaian' => '2020-5-10'],
            ['device_id'=> '1', 'pemakaian_energi' => '120.2', 'tanggal_pemakaian' => '2020-5-11'],
            ['device_id'=> '1', 'pemakaian_energi' => '220.2', 'tanggal_pemakaian' => '2020-5-12'],
            ['device_id'=> '1', 'pemakaian_energi' => '320.2', 'tanggal_pemakaian' => '2020-5-13'],
            ['device_id'=> '1', 'pemakaian_energi' => '420.2', 'tanggal_pemakaian' => '2020-5-14'],
            ['device_id'=> '1', 'pemakaian_energi' => '520.2', 'tanggal_pemakaian' => '2020-5-15'],
            ['device_id'=> '1', 'pemakaian_energi' => '620.2', 'tanggal_pemakaian' => '2020-5-16'],
            ['device_id'=> '3', 'pemakaian_energi' => '120.2', 'tanggal_pemakaian' => '2020-5-17'],
            ['device_id'=> '3', 'pemakaian_energi' => '220.2', 'tanggal_pemakaian' => '2020-5-18'],
            ['device_id'=> '3', 'pemakaian_energi' => '120.2', 'tanggal_pemakaian' => '2020-5-19'],
            ['device_id'=> '3', 'pemakaian_energi' => '320.2', 'tanggal_pemakaian' => '2020-5-20'],
            ['device_id'=> '3', 'pemakaian_energi' => '600.2', 'tanggal_pemakaian' => '2020-5-21'],
            ['device_id'=> '3', 'pemakaian_energi' => '170.2', 'tanggal_pemakaian' => '2020-5-22'],
            ['device_id'=> '3', 'pemakaian_energi' => '110.2', 'tanggal_pemakaian' => '2020-5-23'],
            ['device_id'=> '3', 'pemakaian_energi' => '140.2', 'tanggal_pemakaian' => '2020-5-24'],
            ['device_id'=> '3', 'pemakaian_energi' => '320.2', 'tanggal_pemakaian' => '2020-5-25'],
            ['device_id'=> '3', 'pemakaian_energi' => '900.2', 'tanggal_pemakaian' => '2020-5-26'],
            ['device_id'=> '3', 'pemakaian_energi' => '220.2', 'tanggal_pemakaian' => '2020-5-27'],
            ['device_id'=> '3', 'pemakaian_energi' => '120.2', 'tanggal_pemakaian' => '2020-2-21'],
            ['device_id'=> '3', 'pemakaian_energi' => '80.2', 'tanggal_pemakaian' => '2020-2-22'],
            ['device_id'=> '3', 'pemakaian_energi' => '40.2', 'tanggal_pemakaian' => '2020-2-23'],
            ['device_id'=> '3', 'pemakaian_energi' => '20.2', 'tanggal_pemakaian' => '2020-2-24'],
            ['device_id'=> '3', 'pemakaian_energi' => '34.2', 'tanggal_pemakaian' => '2020-2-25'],
            ['device_id'=> '3', 'pemakaian_energi' => '30.2', 'tanggal_pemakaian' => '2020-2-5'],
            ['device_id'=> '3', 'pemakaian_energi' => '230.2', 'tanggal_pemakaian' => '2020-2-26'],
            ['device_id'=> '3', 'pemakaian_energi' => '830.2', 'tanggal_pemakaian' => '2020-2-27'],
            ['device_id'=> '3', 'pemakaian_energi' => '1124.4', 'tanggal_pemakaian' => '2020-3-21'],
            ['device_id'=> '3', 'pemakaian_energi' => '120.7', 'tanggal_pemakaian' => '2020-3-22'],
            ['device_id'=> '3', 'pemakaian_energi' => '320.6', 'tanggal_pemakaian' => '2020-3-23'],
            ['device_id'=> '3', 'pemakaian_energi' => '220.4', 'tanggal_pemakaian' => '2020-3-24'],
            ['device_id'=> '3', 'pemakaian_energi' => '540.1', 'tanggal_pemakaian' => '2020-3-25'],
            ['device_id'=> '3', 'pemakaian_energi' => '320.3', 'tanggal_pemakaian' => '2020-3-26'],
            ['device_id'=> '3', 'pemakaian_energi' => '420.2', 'tanggal_pemakaian' => '2020-3-27'],
            ['device_id'=> '1', 'pemakaian_energi' => '520.2', 'tanggal_pemakaian' => '2020-3-29'],
            ['device_id'=> '1', 'pemakaian_energi' => '220.2', 'tanggal_pemakaian' => '2020-3-30'],
            ['device_id'=> '1', 'pemakaian_energi' => '120.2', 'tanggal_pemakaian' => '2020-3-31'],

            ['device_id'=> '1', 'pemakaian_energi' => '100.2', 'tanggal_pemakaian' => '2021-6-1'],
            ['device_id'=> '1', 'pemakaian_energi' => '220.2', 'tanggal_pemakaian' => '2021-6-2'],
            ['device_id'=> '1', 'pemakaian_energi' => '430.2', 'tanggal_pemakaian' => '2021-6-3'],
            ['device_id'=> '1', 'pemakaian_energi' => '250.2', 'tanggal_pemakaian' => '2021-6-4'],
            ['device_id'=> '1', 'pemakaian_energi' => '510.2', 'tanggal_pemakaian' => '2021-6-5'],
            ['device_id'=> '1', 'pemakaian_energi' => '310.2', 'tanggal_pemakaian' => '2021-6-6'],
            ['device_id'=> '1', 'pemakaian_energi' => '520.2', 'tanggal_pemakaian' => '2021-6-7'],
            ['device_id'=> '1', 'pemakaian_energi' => '120.2', 'tanggal_pemakaian' => '2021-6-8'],
            ['device_id'=> '1', 'pemakaian_energi' => '320.2', 'tanggal_pemakaian' => '2021-6-9'],
            ['device_id'=> '1', 'pemakaian_energi' => '220.2', 'tanggal_pemakaian' => '2021-6-10'],
            ['device_id'=> '1', 'pemakaian_energi' => '150.2', 'tanggal_pemakaian' => '2021-6-11'],
            ['device_id'=> '1', 'pemakaian_energi' => '320.2', 'tanggal_pemakaian' => '2021-6-12'],
            ['device_id'=> '1', 'pemakaian_energi' => '420.2', 'tanggal_pemakaian' => '2021-6-13'],
            ['device_id'=> '1', 'pemakaian_energi' => '250.2', 'tanggal_pemakaian' => '2021-6-14'],
            ['device_id'=> '1', 'pemakaian_energi' => '650.2', 'tanggal_pemakaian' => '2021-6-15'],
            ['device_id'=> '1', 'pemakaian_energi' => '520.2', 'tanggal_pemakaian' => '2021-6-16'],
            ['device_id'=> '1', 'pemakaian_energi' => '240.2', 'tanggal_pemakaian' => '2021-6-17'],
            ['device_id'=> '1', 'pemakaian_energi' => '320.2', 'tanggal_pemakaian' => '2021-6-18'],
            ['device_id'=> '1', 'pemakaian_energi' => '450.2', 'tanggal_pemakaian' => '2021-6-19'],
            ['device_id'=> '1', 'pemakaian_energi' => '220.2', 'tanggal_pemakaian' => '2021-6-20'],
            ['device_id'=> '1', 'pemakaian_energi' => '140.2', 'tanggal_pemakaian' => '2021-6-21'],
            ['device_id'=> '1', 'pemakaian_energi' => '160.2', 'tanggal_pemakaian' => '2021-6-22'],
            ['device_id'=> '1', 'pemakaian_energi' => '210.2', 'tanggal_pemakaian' => '2021-6-23'],
            ['device_id'=> '1', 'pemakaian_energi' => '521.2', 'tanggal_pemakaian' => '2021-6-24'],
            ['device_id'=> '1', 'pemakaian_energi' => '120.2', 'tanggal_pemakaian' => '2021-6-25'],
            ['device_id'=> '1', 'pemakaian_energi' => '530.2', 'tanggal_pemakaian' => '2021-6-26'],
            ['device_id'=> '1', 'pemakaian_energi' => '150.2', 'tanggal_pemakaian' => '2021-6-27'],
            ['device_id'=> '1', 'pemakaian_energi' => '320.2', 'tanggal_pemakaian' => '2021-6-28'],
            ['device_id'=> '1', 'pemakaian_energi' => '560.2', 'tanggal_pemakaian' => '2021-6-29'],
            ['device_id'=> '1', 'pemakaian_energi' => '370.2', 'tanggal_pemakaian' => '2021-6-30'],

            ['device_id'=> '1', 'pemakaian_energi' => '600.2', 'tanggal_pemakaian' => '2020-6-1'],
            ['device_id'=> '1', 'pemakaian_energi' => '320.2', 'tanggal_pemakaian' => '2020-6-2'],
            ['device_id'=> '1', 'pemakaian_energi' => '420.2', 'tanggal_pemakaian' => '2020-6-3'],
            ['device_id'=> '1', 'pemakaian_energi' => '320.2', 'tanggal_pemakaian' => '2020-6-4'],
            ['device_id'=> '1', 'pemakaian_energi' => '220.2', 'tanggal_pemakaian' => '2020-6-5'],
            ['device_id'=> '1', 'pemakaian_energi' => '120.2', 'tanggal_pemakaian' => '2020-6-6'],
            ['device_id'=> '1', 'pemakaian_energi' => '220.2', 'tanggal_pemakaian' => '2020-6-7'],
            ['device_id'=> '1', 'pemakaian_energi' => '320.2', 'tanggal_pemakaian' => '2020-6-8'],
            ['device_id'=> '1', 'pemakaian_energi' => '420.2', 'tanggal_pemakaian' => '2020-6-9'],
            ['device_id'=> '1', 'pemakaian_energi' => '520.2', 'tanggal_pemakaian' => '2020-6-10'],
            ['device_id'=> '1', 'pemakaian_energi' => '120.2', 'tanggal_pemakaian' => '2020-6-11'],
            ['device_id'=> '1', 'pemakaian_energi' => '220.2', 'tanggal_pemakaian' => '2020-6-12'],
            ['device_id'=> '1', 'pemakaian_energi' => '320.2', 'tanggal_pemakaian' => '2020-6-13'],
            ['device_id'=> '1', 'pemakaian_energi' => '420.2', 'tanggal_pemakaian' => '2020-6-14'],
            ['device_id'=> '1', 'pemakaian_energi' => '520.2', 'tanggal_pemakaian' => '2020-6-15'],
            ['device_id'=> '1', 'pemakaian_energi' => '620.2', 'tanggal_pemakaian' => '2020-6-16'],
            ['device_id'=> '1', 'pemakaian_energi' => '120.2', 'tanggal_pemakaian' => '2020-6-17'],
            ['device_id'=> '1', 'pemakaian_energi' => '220.2', 'tanggal_pemakaian' => '2020-6-18'],
            ['device_id'=> '1', 'pemakaian_energi' => '120.2', 'tanggal_pemakaian' => '2020-6-19'],
            ['device_id'=> '1', 'pemakaian_energi' => '320.2', 'tanggal_pemakaian' => '2020-6-20'],
            ['device_id'=> '1', 'pemakaian_energi' => '420.2', 'tanggal_pemakaian' => '2020-6-21'],
            ['device_id'=> '1', 'pemakaian_energi' => '120.2', 'tanggal_pemakaian' => '2020-6-22'],
            ['device_id'=> '1', 'pemakaian_energi' => '220.2', 'tanggal_pemakaian' => '2020-6-23'],
            ['device_id'=> '1', 'pemakaian_energi' => '320.2', 'tanggal_pemakaian' => '2020-6-24'],
            ['device_id'=> '1', 'pemakaian_energi' => '420.2', 'tanggal_pemakaian' => '2020-6-25'],
            ['device_id'=> '1', 'pemakaian_energi' => '520.2', 'tanggal_pemakaian' => '2020-6-26'],
            ['device_id'=> '1', 'pemakaian_energi' => '120.2', 'tanggal_pemakaian' => '2020-6-27'],
            ['device_id'=> '1', 'pemakaian_energi' => '220.2', 'tanggal_pemakaian' => '2020-6-28'],
            ['device_id'=> '1', 'pemakaian_energi' => '320.2', 'tanggal_pemakaian' => '2020-6-29'],
            ['device_id'=> '1', 'pemakaian_energi' => '420.2', 'tanggal_pemakaian' => '2020-6-30'],
        ]);
        DB::table('history_dailies')->insert([
            ['device_id'=> '3', 'pemakaian_energi' => '51.2', 'tanggal_pemakaian' => '2021-3-5'],
            ['device_id'=> '3', 'pemakaian_energi' => '50.2', 'tanggal_pemakaian' => '2021-3-20'],
            ['device_id'=> '3', 'pemakaian_energi' => '124.4', 'tanggal_pemakaian' => '2021-3-21'],
            ['device_id'=> '3', 'pemakaian_energi' => '320.7', 'tanggal_pemakaian' => '2021-3-22'],
            ['device_id'=> '3', 'pemakaian_energi' => '60.6', 'tanggal_pemakaian' => '2021-3-23'],
            ['device_id'=> '3', 'pemakaian_energi' => '120.4', 'tanggal_pemakaian' => '2021-3-24'],
            ['device_id'=> '3', 'pemakaian_energi' => '340.1', 'tanggal_pemakaian' => '2021-3-25'],
            ['device_id'=> '3', 'pemakaian_energi' => '220.3', 'tanggal_pemakaian' => '2021-3-26'],
            ['device_id'=> '3', 'pemakaian_energi' => '120.2', 'tanggal_pemakaian' => '2021-3-27'],
        ]);
    }
}
