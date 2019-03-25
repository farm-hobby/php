# Sumário

- [Instalar o MySQL Workbench](#instalar-o-mysql-workbench)
- [Criando nossa base de dados](#criando-nossa-base-de-dados)
- [Criando nossa tabela](#criando-nossa-tabela)


### Instalar o MySQL Workbench

Para consfigurar nosso banco de dados vamos utilizar o MySQL Workbench, mas para isso devemos instala-lo
através do link: [https://dev.mysql.com/downloads/workbench/](https://dev.mysql.com/downloads/workbench/)

### Criando nossa base de dados

O MySQL Workbench possui uma opção no menu para criar `schema` personalizado, então vamos criar um novo esquema
chamado `dbphp7`.

### Criando nossa tabela

Agora vamos selecionar a database para criarmos a nossa primeira tabela:

```sql
USE dbphp7;
```

criando nossa tabela:

```sql
CREATE TABLE tb_usuarios (
    idusuarios INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    deslogin VARCHAR(64) NOT NULL,
    dessenha VARCHAR(256) NOT NULL,
    dtcadastro TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP()
);
```