<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => $this->faker->numberBetween(4, 5),
            'title' => $this->faker->name(),
            'slug' => $this->faker->lexify(),
            'description' => $this->faker->paragraphs(3, true),
            'year' => $this->faker->numberBetween(1990, 2026),
            'engine' => $this->faker->numberBetween(90, 300),
            'mileage' => $this->faker->numberBetween(1000, 1000000),
            'phone' => $this->faker->phoneNumber(),
            'price' => $this->faker->numberBetween(100000, 1000000),
            //'visible' => $this->faker->numberBetween(0, 1),
            'created_at' => $this->faker->dateTime(),
            'updated_at' => $this->faker->dateTime(),
        ];
    }
}
