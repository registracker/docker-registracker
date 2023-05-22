docker compose exec php composer install
docker compose exec php php artisan migrate:fresh --seed