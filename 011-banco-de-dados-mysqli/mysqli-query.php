<?php 

    $DB_CONFIG = [
        'host' => 'localhost',
        'user' => 'root',
        'password' => '',
        'database' => 'dbphp7'
    ];

    $connection = new mysqli(
        $DB_CONFIG["host"],
        $DB_CONFIG["user"],
        $DB_CONFIG["password"],
        $DB_CONFIG["database"],
    );

    if ($connection->connect_error) {
        echo 'Error: ' . $connection->connect_error;
    }

    $result = $connection->query('SELECT * FROM tb_usuarios ORDER BY deslogin');    
    $data = [];

    while($row = $result->fetch_assoc()) {
        $data[] = $row;
    }

    echo json_encode($data);
    
?>