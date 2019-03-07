<?php 
    $year = 1991;

    function incrementYear(&$year) {
        return ++$year;
    }

    $newYear = incrementYear($year);

    echo $year;
    echo '<br>';
    echo $newYear;
?>