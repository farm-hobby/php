<?php

    $cars = array(
        array('Fiat' => 1991),
        array('Wolksvagem' => 2000),
        array('Hiunday' => 2018),
    );

    $json = json_encode($cars);

    echo $json;

    echo '<br>';

    print_r(json_decode($json, true));

?>
