<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt=""></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

### Requisitos:

- [x] Ter o [Docker](https://www.docker.com/) instalado.
- [x] Ter o Docker Compose v2.2 instalado
- [x] Ter o GIT instalado.
- [x] Conexão com a internet.

### Clonando e subindo um container Docker do Laravel com Apache2 na porta 8080:

1) Rode o comando em um terminal Linux/macOS ou Prompt de comando do Windows:

```sh
git clone https://github.com/thoggs/pontential-crud-backend.git && cd pontential-crud-backend && docker-compose up -d --build
```

2) Agora precisamos rodar as Migrations e o Seeder para pupular o banco de dados PostgreSQL:

```sh
docker exec web chmod -R 777 storage && docker exec web php artisan migrate && docker exec web php artisan db:seed --class=DevelopersSeeder
```

### Concluído:

> Agora temos o Laravel rodando em http://localhost:8080/api/developers e apontando para o container PostgreSQL que está respondendo na porta `5432`

### License

Project license [MIT license](https://opensource.org/licenses/MIT)
