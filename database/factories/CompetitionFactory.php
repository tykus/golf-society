<?php

namespace Database\Factories;

use App\Models\Course;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Competition>
 */
class CompetitionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'type' => fake()->randomElement(['chopper', 'chopsoc', 'matchplay']),
            'scorer' => fake()->randomElement(['stableford', 'vpar', 'gross', 'nett']),
            'name' => fake()->word,
            'date' => fake()->date(),
            'course_id' => Course::factory(),
        ];
    }
}
