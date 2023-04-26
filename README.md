<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Começando

Visite https://developers.codesumn.com/api/developers para ter um preview do codigo funcionando.

 - **GET /api/developers**: retorna uma lista paginada de todos os desenvolvedores registrados. É possível personalizar a página e a quantidade de resultados exibidos na lista adicionando os seguintes parâmetros à URL:
    - **page**: número da página a ser exibida. Exemplo: https://developers.codesumn.com/api/developers?page=2 exibe a segunda página de resultados.
    
    - **perpage**: quantidade de resultados exibidos por página. Exemplo: https://developers.codesumn.com/api/developers?perpage=5&page=3 exibe a terceira página com
    até 5 desenvolvedores por página.

- **GET /api/developers/{id}**: retorna informações detalhadas sobre um desenvolvedor específico. Não suporta paginação.

- **POST /api/developers**: cria um novo registro de desenvolvedor. Não suporta paginação.

- **PUT /api/developers/{id}**: atualiza as informações de um desenvolvedor existente. Não suporta paginação.

- **DELETE /api/developers/{id}**: exclui um registro de desenvolvedor existente. Não suporta paginação.

## Subindo localmente

### Requisitos:

- [x] Ter o [Docker](https://www.docker.com/) instalado.
- [x] Ter o GIT instalado.

### Clonando e subindo um container Docker do Laravel com Apache2 na porta 8080:

1) Rode o comando em um terminal Linux/macOS ou Prompt de comando do Windows:

```sh
git clone https://github.com/thoggs/pontential-crud-backend.git && cd pontential-crud-backend && docker-compose up -d
```

### Concluído:

Agora temos o Laravel rodando em http://localhost:8080/api/developers e apontando para o container PostgreSQL que está respondendo na porta `5432`

### License

Project license [MIT license](https://opensource.org/licenses/MIT)
