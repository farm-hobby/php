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

### Criando nossa tabela com CREATE TABLE

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

### Inserindo um usuário na tabela com INSERT INTO

Vamos inserir um registro em nossa tabela tb_usuarios

```sql
INSERT INTO tb_usuarios (deslogin, dessenha) VALUES ('root', '!@#$%');
```

### Buscando registros em nossa tabela com SELECT

Vamos encontrar nossos registros contidos na tabela tb_usuarios

```sql
SELECT * FROM tb_usuarios;
```

### Atualizando um dado da tabela com UPDATE

Agora vamos ver como atualizar um dado da nossa tabela tb_usuarios

```sql
UPDATE tb_usuarios SET dessenha = '123456' WHERE idusuario = 1;
```

### Deletando dados da tabela com DELETE

Aprenda como deletar registro da tabela com `DELETE`

```sql
DELETE FROM tb_usuarios WHERE idusuario = 1;
```