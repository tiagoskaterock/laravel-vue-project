<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Configuracao extends Model
{
    protected $table = 'configuracoes';

    use HasFactory;

    protected $fillable = [
        'empresa',
        'site',
        'aplicativo',
        'keywords',
        'description',
        'author'
    ];

}
