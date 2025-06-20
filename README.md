<img src="https://img.shields.io/badge/Laravel-red?logo=laravel&logoColor=white" alt="Laravel" /> <img src="https://img.shields.io/badge/Vue.js-4FC08D?logo=vue.js&logoColor=white" alt="Vue.js" /> <img src="https://img.shields.io/badge/Inertia.js-6554C0?logo=javascript&logoColor=white" alt="Inertia.js" /> <img src="https://img.shields.io/badge/Bootstrap-7952B3?logo=bootstrap&logoColor=white" alt="Bootstrap" /> <img src="https://img.shields.io/badge/MySQL-4479A1?logo=mysql&logoColor=white" alt="MySQL" /> <img src="https://img.shields.io/badge/JavaScript-F7DF1E?logo=javascript&logoColor=black" alt="JavaScript" /> <img src="https://img.shields.io/badge/jQuery-0769AD?logo=jquery&logoColor=white" alt="jQuery" /> <img src="https://img.shields.io/badge/HTML5-E34F26?logo=html5&logoColor=white" alt="HTML5" /> <img src="https://img.shields.io/badge/CSS3-1572B6?logo=css&logoColor=white" alt="CSS3" />


# Projeto Laravel + Vue 

## Sobre o Projeto

Este projeto busca ser uma base genérica para outros projetos web usando Vue 3, Laravel 12, MySQL e Inertia. Utiliza o template AdminLTE, Bootstrap 4 e traz alguns cadastros prontos por padrão.

Serve como base de início ou estudo para outros projetos, trazendo o básico como cadastros simples, sistemas de permissões, criação de módulos e etc. 

Está mantido sob a licença DWTFYW (Do Whatever The F*** You Want)

Qualquer ajuda, crítica positiva ou destrutiva, elogios ou xingamentos, contribuições, serão muito bem vindos.

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

- Clonar o projeto:
```git clone https://github.com/tiagoskaterock/laravel-vue-project```

- Entrar no diretório
```cd laravel-vue-project```

- Criar arquivo de configuração .env a partir do .ev.example
```cp .env.example .env```

- Baixar a pasta vendor com os pacotes necessários para o projeto
```composer install```

- Gerar uma chave para o projeto
```php artisan key:generate```

- Rodar as migrações para criar o banco de dados (Necessário ter completado a configuração no arquivo .env)
```php artisan migrate```

- Instalar pacotes Javascript necessários
```npm install```

- Iniciar o servidor de desenvolvimento Vite
```npm run de```

- Iniciar o servidor de desenvolvimento Laravel
```php artisan serve```

- Crie um usuário, caso não exista, na rota 
`/register`


#### Login
<img src="public/img/login.png" alt="Login" />

#### Register
<img src="public/img/register.png" alt="Register" />

#### Dashboard
<img src="public/img/dashboard.png" alt="Dashboard" />

#### Blog
<img src="public/img/blog.png" alt="Blog" />

#### Editar Post
<img src="public/img/editar-post.png" alt="Editar Post" />

#### Excluir Cliente
<img src="public/img/exclusao.png" alt="Excluir Cliente" />

#### Detalhes Cliente
<img src="public/img/detalhes.png" alt="Excluir Cliente" />
