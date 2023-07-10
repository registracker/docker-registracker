#!/usr/bin/env bash
sudo chown -R $USER:www-data storage
sudo chown -R $USER:www-data bootstrap/cache
chmod -R 775 storage
chmod -R 775 bootstrap/cache
docker compose run --user root php composer install
docker compose run php php artisan migrate:fresh --seed
docker compose exec -u root php php artisan key:generate
docker compose exec -u root php php artisan storage:link
