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
            'ph_air' => 7.7,
            'suhu_air' => 9.1,
            'tds' => 6.0,
        ]);
    }
}
