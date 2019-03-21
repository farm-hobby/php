<?php

    abstract class Animal {
        public function talk() {
            return 'talk';
        }        

        public function move() {
            return 'move';
        }        
    }

    class Cat extends Animal {
        public function talk() {
            return 'meow';
        }
    }

    class Dog extends Animal {
        public function talk() {
            return 'bark';
        }
    }

    class Bird extends Animal {
        public function talk() {
            return 'sing';
        }

        public function move() {
            return 'fly and ' . parent::move();
        }
    }

    $cat = new Cat();
    $dog = new Dog();
    $bird = new Bird();

    
    echo $cat->talk() . '<br>';
    echo $cat->move() . '<br>';
    
    echo '---------------------<br>';
    
    echo $dog->talk() . '<br>';
    echo $dog->move() . '<br>';
    
    echo '---------------------<br>';

    echo $bird->talk() . '<br>';
    echo $bird->move() . '<br>';

?>
