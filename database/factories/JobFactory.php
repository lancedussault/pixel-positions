<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Employer;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'employer_id' => Employer::factory(),
            'title' => fake()->jobTitle,
            'salary' => fake()->randomElement(['$25,000', '$ 50,000', '$75,000']),
            'location' => fake()->randomElement(['Remote', 'In Person']),
            'schedule' => fake()->randomElement(['Full Time', 'Part Time']),
            'url' => fake()->url,
            'featured' => false,
            
        ];
    }
}
