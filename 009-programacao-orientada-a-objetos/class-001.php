<?php

    class Person {

        public $name;

        public function talk() {
            return 'My name\'s '.$this->name;
        }
    }

    $me = new Person();
    $me->name = 'Daniel Simão';
    echo $me->talk();
?>
