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
        'DELETE FROM tb_usuarios WHERE idusuario = :ID'
    );

    $id = 1;

    $statement->bindParam(":ID", $id);

    $statement->execute();

    echo "Deletado!";
?>