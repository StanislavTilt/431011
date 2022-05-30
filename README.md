## Документация
Документация находиться в корне проекта

Документация настроена , нужно только поменять на домен который настроен на локал сервере в variables

Postman collection : test dev.postman_collection.json

Test api key : test_api_key

Так же доку можно глянуть по ссылке

https://documenter.getpostman.com/view/10522838/Uz5Doc1T

# Развертывание

Выполнить комманды
>composer install 

Создать файл .env с данными от локал сервера

Выполнить комманды  
>php artisan config:cache


>php artisan migrate:fresh --seed

