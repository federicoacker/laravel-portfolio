<?php

namespace Database\Factories;

use App\Models\Project;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = fake()->word();
        return [
            'title' => $title,
            'description' => fake()->realTextBetween(200, 300, 2),
            'creation_date' => fake()->dateTimeBetween('-2 yearss', 'now'),
            'tag' => $title . " - " . fake()->languageCode()
        ];
    }
}
