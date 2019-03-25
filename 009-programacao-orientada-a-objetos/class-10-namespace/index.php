<?php

    require_once('config.php');

    // use Client\Register;

    $costumer = new Register();

    $costumer->setname('Zé do Caixão');
    $costumer->setEmail('test@test.com.br');
    $costumer->setPassword('123456');

    echo $costumer;
    // echo $costumer->addSale();
?>
