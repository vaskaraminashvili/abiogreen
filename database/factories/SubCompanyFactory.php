<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SubCompany>
 */
class SubCompanyFactory extends Factory
{
    protected static int $sortOrder = 1;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $companyName = fake()->company();
        $shortDescription = fake()->catchPhrase();
        $description = fake()->paragraph(5);

        return [
            'title' => [
                'en' => $companyName,
                'ka' => 'შვილობილი კომპანია: '.$companyName,
            ],
            'short_desc' => [
                'en' => $shortDescription,
                'ka' => 'მოკლე აღწერა: '.$shortDescription,
            ],
            'description' => [
                'en' => $description,
                'ka' => 'დეტალური აღწერა: '.$description,
            ],
            'status' => fake()->boolean(80), // 80% chance of being active
            'sort' => static::$sortOrder++,
        ];
    }

    /**
     * Indicate that the sub company should be active.
     */
    public function active(): static
    {
        return $this->state(fn (array $attributes) => [
            'status' => true,
        ]);
    }

    /**
     * Indicate that the sub company should be inactive.
     */
    public function inactive(): static
    {
        return $this->state(fn (array $attributes) => [
            'status' => false,
        ]);
    }
}
