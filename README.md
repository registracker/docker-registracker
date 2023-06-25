docker compose exec php composer install
docker compose exec php php artisan orion:specs --path="public/specs/specs.json"
sudo chmod -R 777 storage/app/public/
docker compose exec php php artisan migrate:fresh --seed
docker compose exec php php artisan make:migration create_flights_table
AppServiceProvider
docker run -v "$(pwd)/:/app" --workdir /app node:16-alpine npm run build