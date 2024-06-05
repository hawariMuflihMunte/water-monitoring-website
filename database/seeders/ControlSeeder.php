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
            'ph' => 5.77,
            'suhu' => 20,
            'tds' => 1500,
        ]);
    }
}
