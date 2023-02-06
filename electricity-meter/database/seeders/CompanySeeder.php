<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Str;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        $newCompany = new Company([
            'id' => Str::uuid(),
            'company_name' => $faker->company(),
            'first_name' => $faker->firstName,
            'last_name' => $faker->lastName,
            'telephone' => $faker->phoneNumber,
            'fax' => $faker->e164PhoneNumber,
            'mobile' => $faker->phoneNumber,
            'email' => $faker->email,
            'homepage' => 'www.' . str_replace(" ","", $faker->company) . '.com',
        ]);

        $newCompany->save();

        $secondCompany = new Company([
            'id' => Str::uuid(),
            'company_name' => $faker->company(),
            'first_name' => $faker->firstName,
            'last_name' => $faker->lastName,
            'telephone' => $faker->phoneNumber,
            'fax' => $faker->e164PhoneNumber,
            'mobile' => $faker->phoneNumber,
            'email' => $faker->email,
            'homepage' => 'www.' . str_replace(" ","", $faker->company) . '.com',
        ]);
        dump(str_replace(" ","", $faker->company));
        $secondCompany->save();
    }
}
