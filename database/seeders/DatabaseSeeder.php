<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Configuracao;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Inicia um banco de dados da aplicação
     */
    public function run(): void
    {
        // Cria um administrador
        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('12345678'),
        ]);

        // Cria um registro em configurações
        Configuracao::factory()->create();
    }
}
