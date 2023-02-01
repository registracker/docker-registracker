## Paquetes instalados
### [larevel-orion](https://tailflow.github.io/laravel-orion-docs/)
_Utilizado para la creación de CRUD de tablas independientes._

### [larevel-sanctum](https://laravel.com/docs/9.x/sanctum)
_Paquete para validar las peticiones de la API._  
### [larevel-permission](https://spatie.be/docs/laravel-permission/v5/introduction)
_Gestiona los permisos y roles del apartado web._

### Iniciar los contenedores
docker compose up -d

### Ejecutar la migración
docker-compose exec api_rest_laravel php artisan migrate:refresh --seed

### Crear politica
docker-compose exec api_rest_laravel php artisan make:policy PostPolicy --model=Post

### Listar las rutas
docker-compose exec api_rest_laravel php artisan route:list

### Correr commando-off en contenedor
docker-compose run api_rest_laravel composer install

php artisan make:model MedioDesplazamiento -sc
php artisan make:model Incidente -sc
php artisan make:model Marcador -sc