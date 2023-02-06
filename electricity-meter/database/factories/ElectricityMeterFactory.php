<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ElectricityMeter>
 */
class ElectricityMeterFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'id' => fake()->uuid,
            'device_id' => fake()->numberBetween(100000000, 90000000000),
            'description' => fake()->text(120),
            'ebt' => fake()->numberBetween(40, 100),
            'location' => fake()->buildingNumber(),
        ];
    }
}
