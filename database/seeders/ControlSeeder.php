<?php

namespace Database\Seeders;

use App\Models\Control;
use Illuminate\Database\Seeder;

class ControlSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Control::create([
            'temperature' => 9.8,
            'turbidity' => 10.9,
            'ph' => 8.2,
            'dissolved_oxygen' => 9.0,
            'water_pump' => 'on',
            'aerator' => 'on',
        ]);
    }
}
