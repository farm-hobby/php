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

    $statement = $connection->prepare('SELECT * FROM tb_usuarios ORDER BY deslogin');

    $statement->execute();

    $registers = $statement->fetchAll(PDO::FETCH_ASSOC);

    foreach($registers as $register) {
        foreach($register as $key => $value) {
            echo '<strong>' . $key . ':</strong>' . $value . '<br>';
        }

        echo '=================================================<br>';
    }
?>