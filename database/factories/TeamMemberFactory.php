<?php

namespace Database\Factories;

use App\Models\TeamMember;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TeamMember>
 */
class TeamMemberFactory extends Factory
{
    protected $model = TeamMember::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => [
                'en' => $this->faker->firstName(),
                'ka' => $this->faker->firstName(),
            ],
            'surname' => [
                'en' => $this->faker->lastName(),
                'ka' => $this->faker->lastName(),
            ],
            'position' => [
                'en' => $this->faker->jobTitle(),
                'ka' => $this->faker->jobTitle(),
            ],
            'description' => [
                'en' => $this->faker->paragraph(3),
                'ka' => $this->faker->paragraph(3),
            ],
            'profile_data' => [
                'Location' => $this->faker->city(),
                'Experience' => $this->faker->numberBetween(1, 20).' years',
                'Education' => $this->faker->randomElement(['Bachelor', 'Master', 'PhD']),
                'Email' => $this->faker->safeEmail(),
                'Phone' => $this->faker->phoneNumber(),
            ],
            'status' => $this->faker->boolean(85), // 85% chance of being active
        ];
    }

    public function active(): static
    {
        return $this->state(fn (array $attributes) => [
            'status' => true,
        ]);
    }

    public function inactive(): static
    {
        return $this->state(fn (array $attributes) => [
            'status' => false,
        ]);
    }
}
