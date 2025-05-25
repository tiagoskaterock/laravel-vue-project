<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

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
    public function definition(): array
    {
        $createdAt = fake()->dateTimeBetween('-1 year', 'now');

        $hasUpdatedAt = fake()->boolean(80); // 80% chance de ter updated_at
        $updatedAt = $hasUpdatedAt
            ? fake()->dateTimeBetween($createdAt, 'now')
            : null;

        return [
            'user_id' => User::factory(),
            'title' => fake()->sentence(),
            'content' => fake()->paragraphs(3, true),
            'created_at' => $createdAt,
            'updated_at' => $updatedAt,
        ];
    }
}
