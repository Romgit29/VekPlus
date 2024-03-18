Пример добавления ссылки:

curl -X POST 'localhost:8080/api/link' -d 'link=https://www.example.com' -H 'Accept:application/json'

Ответ: {"success":true,"shortened_link":"7AiFBh"}

Пример перехода по укороченной ссылке:

localhost:8080/test

*редиректит на полный url, либо на 404 если укороченную ссылку не удалось найти в базе*

ДЕПЛОЙ:

git clone https://github.com/Romgit29/VekPlus

cd VekPlus

sudo docker-compose build

sudo docker compose up -d

Выставляем параметры для подключения к бд в .env:

DB_CONNECTION=pgsql

DB_HOST=pgsql

DB_DATABASE=postgres

DB_USERNAME=user

DB_PASSWORD=123

cd src

composer install

docker exec php php artisan migrate

cd ../

sudo chmod 777 -R ./
