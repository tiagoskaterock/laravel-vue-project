<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Imagem extends Model
{
    use HasFactory;

    protected $table = 'imagens';

    /**
     * Campos que podem ser atribuídos em massa.
     */
    protected $fillable = [
        'caminho',
        'nome',
        'slug',
        'tipo',
    ];

    /**
     * Gera o slug automaticamente ao criar o registro.
     */
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($imagem) {
            if (empty($imagem->slug)) {
                $imagem->slug = Str::slug($imagem->nome);
            }
        });
    }
}
