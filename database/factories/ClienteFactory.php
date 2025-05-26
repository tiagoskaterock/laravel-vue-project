<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Carbon\Carbon;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cliente>
 */
class ClienteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $nome = $this->faker->name();

        // Gera uma data de criação entre 6 e 1 meses atrás
        $createdAt = $this->faker->dateTimeBetween('-6 months', '-1 month');

        // Define se o updated_at será igual ao created_at (50% de chance)
        $isSameUpdated = $this->faker->boolean(50);

        $updatedAt = $isSameUpdated
            ? $createdAt
            : $this->faker->dateTimeBetween($createdAt, 'now');

        return [
            'nome' => $nome,
            'email' => $this->faker->unique()->safeEmail(),
            'telefone' => $this->faker->phoneNumber(),
            'endereco' => $this->faker->address(),
            'cidade' => $this->faker->city(),
            'estado' => $this->faker->state(),
            'pais' => $this->faker->country(),
            'slug' => Str::slug($nome . '-' . Str::random(5)),
            'created_at' => $createdAt,
            'updated_at' => $updatedAt,
        ];
    }
}
