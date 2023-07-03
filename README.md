# Instalación rápida

1. Clonar el repositorio de git.
```
git clone https://github.com/registracker/docker-registracker.git
```
2. Crear el archivo `.env` copiando y ajustando el `.env.example`.
```
cp .env.example .env
```
3. Run `docker compose up -d`
4. Acceda a la interfaz de usuario web en `http://localhost:80` (o un puerto diferente, en caso de que haya editado el archivo .env)

docker compose exec php composer install
docker compose exec php php artisan orion:specs --path="public/specs/specs.json"
sudo chmod -R 777 storage/app/public/
docker compose exec php php artisan migrate:fresh --seed
docker compose exec php php artisan make:migration create_flights_table
AppServiceProvider
docker run -v "$(pwd)/:/app" --workdir /app node:16-alpine npm run build
