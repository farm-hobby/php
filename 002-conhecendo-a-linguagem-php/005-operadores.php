<?php

    $a = 10;
    $b = 5;

    $name = 'Daniel';
    $surname = 'Simão';



    echo '<br>';
    echo 'Operadores de Atribuição';
    echo '<br>';
    var_dump($name.=' ');
    echo '<br>';
    var_dump($name.= $surname);


    echo '<br>';
    echo 'Operadores de Comparação';
    echo '<br>';
    var_dump($a > $b);
    echo '<br>';
    var_dump($a < $b);
    echo '<br>';
    var_dump($a == $b);
    echo '<br>';
    var_dump($a === $b);
    echo '<br>';
    var_dump($a != $b);
    echo '<br>';
    var_dump($a !== $b);

    echo '<br>';
    echo 'Operadores Lógicos';
    echo '<br>';
    var_dump($a && $b);
    echo '<br>';
    var_dump($a || $b);
    echo '<br>';
    var_dump(!($a == $b));

?>
