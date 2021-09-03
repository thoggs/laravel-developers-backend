<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Requisitos

- [x] Ter o [Docker instalado](https://www.docker.com/), instalado.
- [x] Acesso ao SHELL com permissão `root` (macOS e Linux; no Windows precisa ser admin).
- [x] Conexão com a internet.
- [x] Ter o GIT instalado

## Clonando e subindo o Docker container na porta 8080
1) - Rode o comando:
```sh
git clone https://github.com/thoggs/pontential-crud-backend.git && cd pontential-crud-backend && docker-compose up -d --build  
```

2) - Entre dentro do container Laravel com o comando:
```sh
docker-compose exec php-apache-laravel /bin/bash
```

3) - Dentro do container Docker, rode o comando:
```sh
sh production.sh
```
4) - Feito isso, agora precisamos alterar o apontamento para o postgreeSQL no rquivo `.env` dentro da paste do projeto `pontential-crud-laravel`

No Linux e macOS, podemos alterar via linha de comando com o vim (opcional)


=> Concluído: agora temos o laravel rodando em http://localhost:8080/ e apontando para o banco de dados PostgreeSQL


## License

Project license [MIT license](https://opensource.org/licenses/MIT)
