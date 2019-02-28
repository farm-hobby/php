<?php
    require_once('config.php');

    echo $_SESSION["nome"];


    // Session ID

    echo '<br>';

    echo session_id();

    // Session Regenerate

    echo '<br>';

    var_dump($_SESSION);

    session_regenerate_id();

    echo '<br>';

    echo session_id();
?>
