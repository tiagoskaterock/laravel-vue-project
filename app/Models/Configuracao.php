<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Configuracao extends Model
{
    protected $table = 'configuracoes';

    use HasFactory;

    protected $fillable = [
        'nome_da_empresa',
        'nome_do_site',
        'nome_do_aplicativo'
    ];

}
