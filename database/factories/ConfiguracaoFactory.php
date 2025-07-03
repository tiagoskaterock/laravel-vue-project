<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Configuracao>
 */
class ConfiguracaoFactory extends Factory
{
    public function definition(): array
    {
        return [
            'empresa' => $this->faker->company,
            'site' => $this->faker->domainName,
            'aplicativo' => $this->faker->word,
            'keywords' => implode(', ', $this->faker->words(5)),
            'description' => $this->faker->sentence(10),
            'author' => $this->faker->name,
        ];
    }
}
