<?php

    $dt = new DateTime();

    $period = new DateInterval('P15D');

    echo $dt->format('d/m/Y H:i:s');
    
    $dt->add($period);

    echo '<br>';

    echo $dt->format('d/m/Y H:i:s');

?>