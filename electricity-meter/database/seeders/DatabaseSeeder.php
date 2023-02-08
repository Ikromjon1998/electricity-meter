<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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

        // User::factory(10)->create();

         User::factory()->create([
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
