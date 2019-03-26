<?php 

    // $DB_CONFIG = [
    //     'host' => 'localhost',
    //     'user' => 'root',
    //     'password' => '',
    //     'database' => 'dbphp7'
    // ];

    $connection = new mysqli(
        $DB_CONFIG->host,
        $DB_CONFIG->user,
        $DB_CONFIG->password,
        $DB_CONFIG->database,
    );

    if ($connection->connect_error) {
        echo 'Error: ' . $connection->connect_error;
    }

    $sql = 'INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (?, ?)';

    $query = $connection->prepare($sql);
    $query->bind_param('ss', $login, $senha);

    $login = 'user';
    $senha = '123456789';

    $query->execute();

    $query->close();
?>