<?php

    class Address {

        private $place;
        private $number;
        private $city;

        public function __construct($place, $number, $city) {
            $this->place = $place;
            $this->number = $number;
            $this->city = $city;
        }

        public function __destruct() {
            var_dump('DESTROY');
        }

        public function __toString() {
            return $this->place . ', ' . $this->number . ', ' . $this->city;
        }
    }

    $address = new Address('Av. Francisco Rodrigues Filho', '2011', 'Mogi das Cruzes');

    var_dump($address);

    echo '<br>';

    echo $address;

    echo '<br>';

    unset($address);

?>
