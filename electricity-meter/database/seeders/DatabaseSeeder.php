<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\ElectricityMeter;
use Illuminate\Database\Seeder;
use \App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        // \App\Models\User::factory(10)->create();

         \App\Models\User::factory()->create([
             'name' => 'GUEST',
             'email' => 'guest@example.com',
         ]);

         User::factory()->create([
             'email' => 'ikromjon120998@gmail.com',
         ]);


        $this->call([
            CompanySeeder::class,
            ElectricityMeterSeeder::class,
        ]);
    }
}
