<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Songs>
 */
class SongsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'length' => $this->faker->numberBetween(10, 1000),
            'date' => $this->faker->date('Y-m-d', 'now'),
            'price' => $this->faker->randomFloat(2, 1, 10),
        ];
    }
}
