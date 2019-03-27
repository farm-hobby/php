[Home](../README.md) / Banco de dados - PDO

# Sumário

- [title](#title)


### Iniciando conexão com PDO

Para Conectar com PDO devemos informar as seguintes informações, uma string
informando qual o tipo de banco de dados vamos utilizar separdo por dois pontos (:) e o nome da nossa database
mais o host separado por ponto e virgula (;) `mysql:dbname=dbphp7;host=localhost`, `usuário` e a `senha`.

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

```php
    foreach($results as $register) {
        foreach($results as $key => $value) {
            echo '<strong>' . $key . ':</strong>' . $value . '<br>';
        }

        echo '=================================================<br>';
    }
```
