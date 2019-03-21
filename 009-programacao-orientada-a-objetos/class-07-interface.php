<?php

    interface Vehicle {
        public function accelerate($velocity);
        public function brake($velocity);
        public function changeGear($gear);
    }

    class Civic implements Vehicle {

        public function accelerate($velocity) {
            echo 'The vehicle accelerated to the speed of ' . $velocity . 'km/h.';
        }

        public function brake($velocity) {
            echo 'The vehicle braked to the speed of ' . $velocity . 'km/h.';
        }

        public function changeGear($gear) {
            echo 'The vehicle changed to the ' . $gear . ' gear.';
        }

    }

    $car = new Civic();

?>