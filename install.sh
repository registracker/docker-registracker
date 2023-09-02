#!/usr/bin/env bash
sudo chown -R $USER:www-data storage
sudo chown -R $USER:www-data bootstrap/cache
<<<<<<< HEAD
chmod -R 775 storage
chmod -R 775 bootstrap/cache
=======
sudo chmod -R 775 storage
sudo chmod -R 775 bootstrap/cache
>>>>>>> dd4340c00fcd083a22590c5556eb762ca52b53ea
docker compose run --user root php composer install
docker compose run php php artisan migrate:fresh --seed
docker compose exec -u root php php artisan key:generate
docker compose exec -u root php php artisan storage:link
