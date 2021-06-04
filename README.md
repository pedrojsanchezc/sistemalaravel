Instalaciones Previas:
1. Instalación de Xampp
2. Instalación de Visual Studio Code


Instalación Employees:
1. Primer comando:
composer create-project --prefer-dist laravel/laravel sistemalaravel
2. Segundo comando:
php artisan migrate
3. Tercer comando:
php artisan make:model Empleados -mrc
4. Cuarta aplicación:
Instalación de Extensiones(Bootstrap v4 Snippets; IntelliSense for CSS class na..; Laravel 5 Snippets; PHP Intelephense)
5. Quinto comando:
php artisan migrate
6. Sexto comando:
php artisan route:list
7. Comando:
php artisan route:list
8. Comando:
php artisan route:list
9. Comando:
php artisan route:list
10. Comando:
php artisan storage:link
11. Comando:
php artisan make:auth
12. Proceso:
Registro de Login
13. Proceso:
Adecuación del Login
14. Proceso:
Estilos del Form
15. Proceso:
Validación de Datos
16. Proceso:
Validación de Campos


Instalación Companies:
1. Primer comando:
composer require appzcoder/crud-generator --dev
2. Segundo comando:
php artisan vendor:publish --provider="Appzcoder\CrudGenerator\CrudGeneratorServiceProvider"
3. Tercer comando:
php artisan crud:generate Companies --fields='title#string; content#text; category#select#options={"technology": "Technology", "tips": "Tips", "health": "Health"}' --view-path=admin --controller-namespace=App\\Http\\Controllers\\Admin --route-group=admin --form-helper=html
4. Cuarto comando:
php artisan migrate
5. Quinto comando:

