<?php

    $name = "Daniel";

    var_dump($name);

    $age = (int)$_GET["age"];

    var_dump($age);

    $ip = $_SERVER['REMOTE_ADDR'];
    $script = $_SERVER['SCRIPT_NAME'];

    var_dump($ip, $script);
?>
