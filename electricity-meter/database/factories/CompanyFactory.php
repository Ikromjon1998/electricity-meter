<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as Faker;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Company>
 */
class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $faker = Faker::create();
        return [
            'id' => Str::uuid(),
            'company_name' => $faker->company,
            'first_name' => $faker->optional()->firstName,
            'last_name' => $faker->optional()->lastName,
            'telephone' => $faker->optional()->phoneNumber,
            'fax' => $faker->optional()->phoneNumber,
            'mobile' => $faker->optional()->phoneNumber,
            'email' => $faker->optional()->email,
            'homepage' => $faker->optional()->url,
        ];
    }
}
