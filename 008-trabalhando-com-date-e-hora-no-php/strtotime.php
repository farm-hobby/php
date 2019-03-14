<?php
    $time = strtotime('2030-12-01');

    echo date('d/m/Y', $time);
    echo '<br>';
    echo date('d/m/Y', strtotime('now'));
    echo '<br>';
    echo date('d/m/Y', strtotime('+1 day'));
    echo '<br>';
    echo date('d/m/Y', strtotime('+1 week'));
?>
