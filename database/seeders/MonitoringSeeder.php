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
            'temperature' => 28.8,
            'turbidity' => 90,
            'ph' => 7.9,
            'dissolved_oxygen' => 6.8,
            'water_pump' => 'off',
            'aerator' => 'off',
        ]);
    }
}
