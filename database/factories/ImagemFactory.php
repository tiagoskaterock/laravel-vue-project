<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Imagem>
 */
class ImagemFactory extends Factory
{
    public function definition(): array
    {
        $nome = $this->faker->words(2, true); // Ex: "foto perfil"
        $slug = Str::slug($nome);

        return [
            'caminho' => 'https://picsum.photos/seed/' . $slug . '/800/600',
            'nome' => ucfirst($nome),
            'slug' => $slug,
            'tipo' => $this->faker->randomElement(['banner', 'login', 'site', 'galeria', 'produto']),
        ];
    }
}
