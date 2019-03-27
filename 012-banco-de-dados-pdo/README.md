[Home](../README.md) / Banco de dados - PDO

# Sumário

- [Iniciando conexão com PDO](#iniciando-conexão-com-pdo)
- [Preparando uma Query](#preparando-uma-query)
- [Executando a Query](#executando-a-query)
- [Resgatando os registros solicitados](#resgatando-os-registros-solicitados)
- [Iterando sob os resultados](#iterando-sob-os-resultados)
- [Inserindo dados na database](#inserindo-dados-na-database)
- [Alterando dados da database](#alterando-dados-da-database)
- [Apagando dados na database](#apagando-dados-na-database)
- [Usando transações](#usando-transações)

### Iniciando conexão com PDO

Para Conectar com PDO devemos informar as seguintes informações, uma string
informando qual o tipo de banco de dados vamos utilizar separdo por dois pontos **:** e o nome da nossa database
mais o host separado por ponto e virgula **;** `mysql:dbname=dbphp7;host=localhost`, `usuário` e a `senha`.

```php
<?php
    $DB_CONFIG = [
        'database' => 'mysql:dbname=dbphp7;host=localhost',
        'user' => 'root',
        'password' => '',
    ];

    $connection = new PDO(
        $DB_CONFIG["database"],
        $DB_CONFIG["user"],
        $DB_CONFIG["password"],
    );
?>
```

### Preparando uma Query

```php
<?php
    $statement = $connection.prepare('SELECT * FROM tb_usuarios ORDER BY deslogin');
?>
```

### Executando a Query

```php
<?php
    $statement.execute();
?>
```

### Resgatando os registros solicitados

utilizamos o método `fetchAll` para coletar os registros consultados,
podemos utilizar de atributos estáticos da Classe `PDO` como a `PDO::FETCH_ASSOC`
para recebermos um Array Associativo como resposta.

```php
<?php
    $results = $statement.fetchAll(PDO::FETCH_ASSOC);
?>
```

### Iterando sob os resultados

Com a Classe `PDO` sabemos exatamente a quantidade de ítens retornados,
e com isso conseguimos iterar sobre os dados com um `foreach`;

```php
    foreach($results as $register) {
        foreach($results as $key => $value) {
            echo '<strong>' . $key . ':</strong>' . $value . '<br>';
        }

        echo '=================================================<br>';
    }
```

### Inserindo dados na database

```php
<?php 

    /* 
        Após conexão com banco instanciamos a variavel $connection 
    */

    $statement = $connection->prepare(
        'INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (:LOGIN, :PASSWORD)'
    );

    $login = 'test@test.com.br';
    $password = '12345678';

    $statement->bindParam(":LOGIN", $login);
    $statement->bindParam(":PASSWORD", $password);

    $statement->execute();

    echo "Inserido!";

?>
```

### Alterando dados da database

```php
<?php 
    /* 
        Após conexão com banco instanciamos a variavel $connection 
    */

    $statement = $connection->prepare(
        'UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASSWORD WHERE idusuario = :ID'
    );

    $login = 'mega@test.com.br';
    $password = 'test1000';
    $id = 3;

    $statement->bindParam(":LOGIN", $login);
    $statement->bindParam(":PASSWORD", $password);
    $statement->bindParam(":ID", $id);

    $statement->execute();

    echo "Atualizado!";
?>
```

### Apagando dados na database

```php
<?php 

?>
```

### Usando transações

```php
<?php 

?>
```
