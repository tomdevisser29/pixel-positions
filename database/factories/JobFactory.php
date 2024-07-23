<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory {
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array {
        return [
            'employer_id' => \App\Models\Employer::factory(),
            'title' => fake()->jobTitle,
            'salary' => '$' . fake()->numberBetween(20000, 150000) . ' USD',
            'location' => fake()->city,
            'schedule' => fake()->randomElement(['Full Time', 'Part Time', 'Contract', 'Temporary', 'Internship']),
            'url' => fake()->url,
            'featured' => fake()->boolean(10),
        ];
    }
}
