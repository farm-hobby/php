<?php 
    function getFullName(string $firstname, string $lastname):string {
        return $firstname . ' ' . $lastname;
    }

    echo getFullName('Daniel', 'Simão');
?>