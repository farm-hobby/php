<?php

    class Car {

        private $model;
        private $motor;
        private $year;

        public function getModel() {
            return $this->model;
        }

        public function setModel($model) {
            $this->model = $model;
        }

        public function getMotor():float {
            return $this->motor;
        }

        public function setMotor($motor) {
            $this->motor = $motor;
        }

        public function getYear():int {
            return $this->year;
        }

        public function setYear($year) {
            $this->year = $year;
        }

        public function display() {
            return [
                "model" => $this->getModel(),
                "motor" => $this->getMotor(),
                "year" => $this->getYear()
            ];
        }
    }

    /* Execution Begin */
    
    $fiat = new Car();

    $fiat->setModel('Mile Fire');
    $fiat->setMotor('1.0');
    $fiat->setYear('2005');

    var_dump($fiat->display());

    /* Execution End */


?>
