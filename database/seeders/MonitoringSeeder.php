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
            'ph' => 7.1,
            'kelembaban' => 38,
            'temperatur' => 36,
            'nitrogen' => 0.09,
            'fosfor' => 0.05,
            'kalium' => 0.49,
        ]);
    }
}
