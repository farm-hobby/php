<?php

    $name = "Daniel";

    function sayMyName() {
        global $name;
        echo $name;
    }

    sayMyName();
?>
