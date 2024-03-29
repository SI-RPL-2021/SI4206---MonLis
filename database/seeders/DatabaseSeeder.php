<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            RolesSeeder::class,
            UserSeeder::class,
            DeviceSeeder::class,
            HistoryDailySeeder::class,
            HistoryHoursSeeder::class,
        ]);
    }
}
