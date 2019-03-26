<?php 

    $connection = new mysqli(
        'localhost',
        'root',
        '',
        'dbphp7'
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