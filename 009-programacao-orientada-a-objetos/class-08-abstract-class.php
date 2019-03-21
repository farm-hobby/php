<?php

    interface Vehicle {
        public function accelerate($velocity);
        public function brake($velocity);
        public function changeGear($gear);
    }

    abstract class Automovel implements Vehicle {

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

    class Fiat extends Automovel {

        public function Trunk(bool $state = false) {
            $trunkState = $state ? 'open' : 'close';
            echo 'The vehicle trunk is ' . $trunkState . '!';
        }

    }

    $car = new Fiat();

    $car->accelerate(150);
    echo '<br>';
    $car->trunk();

?>