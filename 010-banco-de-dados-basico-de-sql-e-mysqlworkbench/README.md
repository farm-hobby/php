[Home](../README.md) / Banco de dados - Básico de SQL e mySQL Workbench

# Sumário

- [Instalar o mySQL Workbench](#instalar-o-mysql-workbench)
- [Criando nossa base de dados](#criando-nossa-base-de-dados)
- [Criando nossa tabela com CREATE TABLE](#criando-nossa-tabela-com-create-table)
- [Inserindo um usuário na tabela com INSERT INTO](#inserindo-um-usuário-na-tabela-com-insert-into)
- [Buscando registros em nossa tabela com SELECT](#buscando-registros-em-nossa-tabela-com-select)
- [Atualizando um dado da tabela com UPDATE](#atualizando-um-dado-da-tabela-com-update)
- [Deletando dados da tabela com DELETE](#deletando-dados-da-tabela-com-delete)
- [Resetando a tabela com TRUNCATE TABLE](#resetando-a-tabela-com-truncate-table)


### Instalar o mySQL Workbench

Para consfigurar nosso banco de dados vamos utilizar o MySQL Workbench, mas para isso devemos instala-lo
através do link: [https://dev.mysql.com/downloads/workbench/](https://dev.mysql.com/downloads/workbench/)

### Criando nossa base de dados

O MySQL Workbench possui uma opção no menu para criar `schema` personalizado, então vamos criar um novo esquema
chamado `dbphp7`.

### Selecionando nossa base de dados

Agora vamos selecionar a database para criarmos a nossa primeira tabela:

```sql
USE dbphp7;
```

### Criando nossa tabela com CREATE TABLE

```sql
CREATE TABLE tb_usuarios (
    idusuarios INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    deslogin VARCHAR(64) NOT NULL,
    dessenha VARCHAR(256) NOT NULL,
    dtcadastro TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP()
);
```

### Inserindo um usuário na tabela com INSERT INTO

```sql
INSERT INTO tb_usuarios (deslogin, dessenha) VALUES ('root', '!@#$%');
```

### Buscando registros em nossa tabela com SELECT

```sql
SELECT * FROM tb_usuarios;
```

### Atualizando um dado da tabela com UPDATE

```sql
UPDATE tb_usuarios SET dessenha = '123456' WHERE idusuario = 1;
```

### Deletando dados da tabela com DELETE

```sql
DELETE FROM tb_usuarios WHERE idusuario = 1;
```

### Resetando a tabela com TRUNCATE TABLE

```sql
TRUNCATE TABLE tb_usuarios;
```