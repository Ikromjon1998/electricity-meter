<?php

namespace Database\Seeders;

use App\Models\ElectricityMeter;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ElectricityMeterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ElectricityMeter::factory()->count(20)->create();
    }
}
