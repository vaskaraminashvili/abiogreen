<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TimelineEvent>
 */
class TimelineEventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(),
            'event_date' => fake()->dateTimeBetween('-5 years', 'now'),
            'description' => fake()->paragraph(),
            'order' => fake()->numberBetween(1, 100),
            'is_active' => true,
        ];
    }
}
