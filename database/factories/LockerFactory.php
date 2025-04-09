<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Locker>
 */
class LockerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [

            'locker_number' => $this->faker->unique()->numberBetween(1000, 9999),
            'user_id' => null,
            'store_id' => null,
            'status' => $this->faker->randomElement(['available', 'inUse']),
            'code' => $this->faker->numberBetween(1000, 9999),
        ];
    }
}
