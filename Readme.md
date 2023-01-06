### Donde se haya descargado el repositorio ejecutar el siguiente comando
docker compose up -d


### Buscar el nombre del contenedor de Bitnami/laravel:9
docker ps
docker exec -ti {nombre_del_contenedor} bash

### Dentro del contenedor ejecutar
php artisan migrate:refresh --seed


### Crear politica
php artisan make:policy PostPolicy --model=Post


php artisan route:list


https://tailflow.github.io/laravel-orion-docs/
https://laravel.com/docs/9.x/sanctum

### Correr commando en contenedor
docker-compose run api_rest_laravel composer install