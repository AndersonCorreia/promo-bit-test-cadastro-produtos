# Desafio Promobit

⚠️ **Atenção**: Teste de lógica em: [teste-logica](https://github.com/AndersonCorreia/promo-bit-teste-logica)

### Setup

Para executar o projeto tenha uma versão do PHP a partir da 7.4, composer e Docker + Docker compose instalados.
Escolhi usar o docker para executar o banco de dados Mysql utilizado no projeto.

1# passo - Subir o container do banco de dados:

Execute o comando:
```
docker-compose up
```
2# passo - baixar as dependencias do projeto pelo composer:

Execute o comando:
```
composer update
```

3# passo - criar o arquivo .env utilizado pelo laravel:

Execute o comando:
```
cp .env.example .env
```
Isto cria um arquivo .env com as configurações padrões do projeto, observe que no .env.example alterei os dados de coneção com o banco de dados
para as informações utilizadas para criar o container do banco de dados, inclusive em outra Porta pois no meu sistema a 3306 estava ocupada.

4# passo - Executar as migrations do laravel para popular o banco de dados:

Execute o comando:
```
php artisan migrate
```
5# passo - Todas as configurações feitas, agora é só executar o servidor do laravel:

Execute o comando:
```
php artisan serve
```

#### SQL para extração de relatório de relevância de produtos:
```SQL
SELECT t.id, t.name AS 'Tag', COUNT(p.id) AS 'Total de produtos' 
FROM tags t 
LEFT JOIN product_tag pt ON t.id = pt.tag_id 
LEFT JOIN products p ON p.id = pt.product_id 
GROUP BY t.id, t.name
```

### Techs Utilizadas

- PHP 7.4.7
- MySQL 8.0
- Laravel 8
- AdminLTE 3.0.0
- Bootstrap
- Docker + Docker compose, para rodar o mysql do projeto

