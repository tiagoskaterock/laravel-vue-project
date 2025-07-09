<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Configuracao;

class ApiConfiguracoesController extends Controller
{
    public function index() {
        return Configuracao::first();
    }
}
