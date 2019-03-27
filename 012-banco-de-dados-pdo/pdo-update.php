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