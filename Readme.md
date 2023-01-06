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

### Paquetes utilizados
- https://tailflow.github.io/laravel-orion-docs/
- https://laravel.com/docs/9.x/sanctum
