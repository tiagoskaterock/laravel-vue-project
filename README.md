<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Sobre o Projeto

Este projeto busca ser uma base genérica para outros projetos web usando Vue, Laravel e Inertia. Utiliza o template adminLTE, Bootstrap 4 e traz alguns cadastros prontos por padrão.    

## Sobre o Laravel

Laravel é um framework PHP moderno com sintaxe elegante. Ele facilita tarefas comuns de desenvolvimento como:

- [Sistema de rotas simples e rápido](https://laravel.com/docs/routing)
- [Container de injeção de dependências](https://laravel.com/docs/container)
- [ORM poderoso (Eloquent)](https://laravel.com/docs/eloquent)
- [Migrações de banco de dados](https://laravel.com/docs/migrations)
- [Filas, eventos, jobs e mais](https://laravel.com/docs)

## Documentação

- [Documentação oficial](https://laravel.com/docs)
- [Laracasts (vídeo aulas)](https://laracasts.com)
- [Laravel Bootcamp](https://bootcamp.laravel.com)

## Como iniciar este projeto (Laravel + Vue + Inertia.js)

Siga os passos abaixo para rodar o projeto localmente:

```bash
git clone https://github.com/seu-usuario/seu-repositorio.git
cd seu-repositorio
cp .env.example .env
composer install
php artisan key:generate
php artisan migrate
npm install
npm run dev
php artisan serve
```

#### Dashboard
<img src="public/img/dashboard.png" alt="Dashboard" />

#### Blog
<img src="public/img/blog.png" alt="Dashboard" />

#### Editar Post
<img src="public/img/editar-post.png" alt="Dashboard" />
