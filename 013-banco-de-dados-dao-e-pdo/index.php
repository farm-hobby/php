<?php

    require_once('config.php');

    $user = new User();

    $user->loadById(1);

    // echo $user;
    // echo '<br>';
    echo json_encode(User::getList());

?>