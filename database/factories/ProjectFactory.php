<?php

namespace Database\Factories;

use App\Models\Project;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    protected static int $sortOrder = 1;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $projectTitles = [
            'Solar Power Plant Alpha',
            'Wind Energy Station Beta',
            'Hydroelectric Dam Project',
            'Geothermal Energy Facility',
            'Biomass Processing Center',
            'Green Energy Hub',
            'Renewable Energy Complex',
        ];

        $projectTitle = fake()->randomElement($projectTitles);
        $description = fake()->paragraph(4);
        $stationSize = fake()->randomElement(['10MW', '25MW', '50MW', '100MW', '200MW', '500MW']);

        return [
            'title' => [
                'en' => $projectTitle,
                'ka' => 'პროექტი: '.$projectTitle,
            ],
            'description' => [
                'en' => $description,
                'ka' => 'აღწერა: '.$description,
            ],
            'station_size' => $stationSize,
            'status' => fake()->boolean(85), // 85% chance of being active
            'sort' => static::$sortOrder++,
        ];
    }

    /**
     * Indicate that the project should be active.
     */
    public function active(): static
    {
        return $this->state(fn (array $attributes) => [
            'status' => true,
        ]);
    }

    /**
     * Indicate that the project should be inactive.
     */
    public function inactive(): static
    {
        return $this->state(fn (array $attributes) => [
            'status' => false,
        ]);
    }

    /**
     * Indicate that the project should be large scale.
     */
    public function largeScale(): static
    {
        return $this->state(fn (array $attributes) => [
            'station_size' => fake()->randomElement(['200MW', '500MW', '1GW']),
        ]);
    }
}
