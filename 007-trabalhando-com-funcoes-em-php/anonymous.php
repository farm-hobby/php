<?php 

    function doAsync($callback) {
        $callback();
    }

    doAsync(function() {
        echo "Terminou!";
    });

    $fn = function ($param) {
        var_dump($param);
    };

    $fn('String');

?>