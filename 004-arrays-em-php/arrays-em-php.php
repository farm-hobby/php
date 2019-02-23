<?php
    // vetor
    $frutas = array('laranja', 'maçã', 'pêra');

    print_r($frutas);
    echo '<br>';
    var_dump($frutas);
    echo '<br>';
    // echo $frutas; // Erro

    // array associativo
    $people = array(
        'Brad'  => 35,
        'Dan'   => 28,
        'Ju'    => 28,
    );

    print_r($people);

    // array multi-dimensional
    $cars = array(
        array('Fiat' => 2004),
        array('Gol' => 2013),
        array('Pegeout' => 2000),
    );

    print_r($cars);
?>
