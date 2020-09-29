## -- TASK --
listar,incluir,editar e deletar todos os nossos motoristas onde eles terão nome,cpf,email,situação (Livre,Em Curso,Retornando) e status (Ativo ou Não).
Devera ser um CRUD básico.

## -- Tecnologias Utilizadas --
```
Docker
Docker-compose
Composer
Php 7.3
Laravel 8.6
Mysql 8
Git
```

## ---Receita ---

1. Clone repositorio:

    `$ git clone https://github.com/JonasAiram/crud_simples.git`
***
2. Copie o arquivo .env.example/ para .env/ na pasta do projeto:

    `$ cp .env.example .env`
***
3. Alterar as permissões da pasta bootstrap/cache e storage/:

```
    $ sudo chown -R $USER:www-data bootstrap/cache/ storage/
    $ sudo chmod -R 775 bootstrap/cache/ storage/
```
***
4. Build o projeto e levante o container:
``` 
    $ docker-compose build
    $ docker-compose up -d
```  
***
5. Alterar usuario do mysql:
``` 
    ALTER USER 'root' IDENTIFIED WITH mysql_native_password BY 'root';
    FLUSH PRIVILEGES;
```
***
6. Gerar a key do laravel:
`$ php artisan key:generate`
***
7. Criar a tabela no banco utilizando migration:
`$ php artisan migrate`
***
8. Acesse: http://localhost:8011/motoristas
