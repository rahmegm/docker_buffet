### Passo a passo
Clone Repositório
```sh
git clone https://github.com/rahmegm/docker_buffet.git
```

Entrar na pasta a qual foi clonado o Repositório usando o CMD

Entrar na pasta do docker usando o CMD
```sh
cd docker_buffet
```

Crie o Arquivo .env
```sh
copy .env.example .env
```

Suba os containers do projeto
```sh
docker compose up -d --build
```

Acessar o container
```sh
docker exec -it app-laravel-app-1 /bin/bash
```

Instalar as dependências do projeto
```sh
composer install
```


Gerar a key do projeto Laravel
```sh
php artisan key:generate
```
Acessar o projeto
[http://localhost:8989](http://localhost:8989)

Acessar o database
[http://localhost:8090](http://localhost:8090)
