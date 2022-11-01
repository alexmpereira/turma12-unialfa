## Comandos para rodar a aplicação

- **docker-compose up -d**
- Entrar no container do poo-php:
- **docker exec -it poo-php bash**
- Dentro do container instalar os pacotes: **composer install**

> Acessar a aplicação na web: localhost:8082

#### Abrir o gerenciador de banco de dados
- localhost:5050
  - Email: **pgadmin4@pgadmin.org**
  - Senha: **admin**

#### Para criar a conexão com o banco
- Host name/address postgres
- Port 5432
- Username as POSTGRES_USER: postgres
- Password: changeme