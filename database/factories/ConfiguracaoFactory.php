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
            'nome_da_empresa' => $this->faker->company,
            'nome_do_site' => $this->faker->domainName,
            'nome_do_aplicativo' => $this->faker->word,
        ];
    }
}
