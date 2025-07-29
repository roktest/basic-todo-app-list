<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'long_description' => $this->faker->paragraphs(3, true),
            'completed' => $this->faker->boolean(50), // 50% chance of being completed
            'created_at' => now(),
            'updated_at' => now()
        ];
    }
}
