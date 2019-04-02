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

    $connection->beginTransaction();

    $statement = $connection->prepare(
        'DELETE FROM tb_usuarios WHERE idusuario = ?'
    );

    $id = 2;

    $statement->execute([
        $id
    ]);

    // $connection->rollback();
    $connection->commit();

    echo "Deleted!";
?>