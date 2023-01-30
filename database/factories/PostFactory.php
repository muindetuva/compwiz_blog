<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'title' => fake()->sentence(6),
            'caption' => fake()->paragraph(),
            'image' => fake()->imageUrl(),
            'content' => fake()->paragraphs(12, true),
            'user_id' => fake()->numberBetween(0, 2)
        ];
    }
}
