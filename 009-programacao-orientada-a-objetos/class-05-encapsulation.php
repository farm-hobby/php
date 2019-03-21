<?php

    class Person {

        public $name = 'My Name';
        protected $year = 45;
        private $password = 'ahdb58#$%';

        public getInfo() {
            echo $this->name . '<br>';
            echo $this->year . '<br>';
            echo $this->password . '<br>';
        }
    }

    $me = new Person();

    echo $me->name . '<br>';
    echo $me->year . '<br>'; // Uncaught Error: Cannot access protected property Person::$year
    echo $me->password . '<br>'; // Uncaught Error: Cannot access private property Person::$password

?>