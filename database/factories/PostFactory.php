<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Post;
use Str;

/**
 * @extends Factory<Post>
 */
class PostFactory extends Factory
{
    public function definition(): array
    {
        $createdAt = fake()->dateTimeBetween('-1 year', 'now');

        $hasUpdatedAt = fake()->boolean(80);
        $updatedAt = $hasUpdatedAt
            ? fake()->dateTimeBetween($createdAt, 'now')
            : null;

        $title = $this->faker->sentence();

        return [
            'user_id' => User::inRandomOrder()->first()?->id ?? User::factory(),
            'title' => $title,
            'slug' => Str::slug($title),
            'content' => $this->faker->paragraphs(3, true),
            'created_at' => $createdAt,
            'updated_at' => $updatedAt,
        ];
    }
}
