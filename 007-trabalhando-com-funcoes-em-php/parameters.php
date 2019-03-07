<?php 
    function greet($text = 'World', $period = 'Good Morning') {
        return 'Hello '.$text.', '.$period.'! <br>'; 
    }

    echo greet('Everyone', 'Good Night');
    echo greet('Everyone');
    echo greet('', '');

    function greet2() {
        $args = func_get_args();

        return $args;
    }

    var_dump(greet2());

    echo '<br>';

    var_dump(greet2("Good", "Morning"));

    echo '<br>';
    
    var_dump(greet2('String', [], 10, 15.2, false));
?>
