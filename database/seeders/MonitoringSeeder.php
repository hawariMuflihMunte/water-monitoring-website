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
            'ph' => 5.77,
            'suhu' => 20,
            'tds' => 1500,
        ]);
    }
}
