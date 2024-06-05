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
            'ph' => 7.1,
            'kelembaban' => 38,
            'temperatur' => 36,
            'nitrogen' => 0.09,
            'fosfor' => 0.05,
            'kalium' => 0.49,
        ]);
    }
}
