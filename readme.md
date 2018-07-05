## Docker

```bash
docker-compose build

docker-compose up

docker-compose down
```

```bash
docker exec -it [web_container_name] [command]

winpty docker exec -it [web_container_name] [command] // for windows
```

```bash
docker-compose run --rm composer [command]
```
etc...

## Laravel IDE Helper

https://github.com/barryvdh/laravel-ide-helper

```bash
php artisan ide-helper:generate
php artisan ide-helper:meta

php artisan ide-helper:models [--reset] // for eloquent
```

etc...

## コメント日本語変換

https://github.com/laravel-ja/comja5

```bash
vendor/bin/comja5 -f
```

誤訳もあるので目安程度に  
ex) after_or_equal
