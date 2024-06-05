<?php

namespace Database\Seeders;

use App\Models\Monitoring;
use Illuminate\Database\Seeder;

class MonitoringSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Monitoring::create([
            'ph_air' => 7.7,
            'suhu_air' => 9.1,
            'tds' => 6.0,
        ]);
    }
}
