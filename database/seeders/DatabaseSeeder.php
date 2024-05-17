<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Monitoring;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Monitoring::create([
            'ph' => 7.1,
            'kelembaban_tanah' => 28.8,
            'temperatur_tanah' => 20,
            'kadar_nutrisi_tanah' => 6.8,
        ]);
    }
}
