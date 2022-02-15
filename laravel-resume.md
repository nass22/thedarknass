# Laravel:

1. On initialise le projet: 
    . `composer create-project laravel/laravel thedarknass --prefer-dis`

1. On config le **.env**

1. On ajoute l’authentification avec Breeze:
    . `composer require laravel/breeze --dev`
    . `php artisan breeze:install`
    . `npm install`
    . `npm run dev`

1. On crée la base de donnée [(MySQL-CMD)](https://buzut.net/maitrisez-mysql-en-cli/):
    . `mysql -h localhost -u root`
    . `CREATE DATABASE thedarknass DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;`

1. On s'attaque aux tables de la DB. On modifie si nécessaire la migration User:
    . `$table->enum('role', array('user', 'redac', 'admin'))->default('user');` 

1. On modifie le model User:
    . `protected $fillable = [
        'name',
        'email',
        'password',
        'role'
        ];`

1. On modifie le factory User en fonction des modifs du model:
    . Ici pas besoin car on a mis par défault la valeur de role sur user.

1. On s'attaque aux Posts, on crée un model Post:
    . `php artisan make:model Post -mfc`

1. 
