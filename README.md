ДЕПЛОЙ:

git clone https://github.com/Romgit29/VekPlus
cd VekPlus
sudo docker-compose build
sudo docker compose up -d

Выставляем параметры для подключения к бд в env:
DB_CONNECTION=pgsql
DB_HOST=pgsql
DB_DATABASE=postgres
DB_USERNAME=user
DB_PASSWORD=123

cd src
composer install
sudo docker exec php php artisan migrate
cd ../
sudo chmod 777 -R src
