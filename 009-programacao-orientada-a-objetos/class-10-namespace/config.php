<?php

    spl_autoload_register(function ($className) {
        $dirClasses = 'class';
        $filename = $dirClasses . DIRECTORY_SEPARATOR . $className . '.php';

        if (file_exists($filename)) {
            require_once($filename);
        }
    });

?>
