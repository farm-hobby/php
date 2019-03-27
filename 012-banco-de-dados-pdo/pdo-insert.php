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