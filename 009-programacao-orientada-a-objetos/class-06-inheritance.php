<?php

    class Document {
        
        private $number;

        public function getNumber():float {
            return $this->number;
        }

        public function setNumber($number) {
            $this->number = $number;
        }
    }

    class CPF extends Document {

        public function validate():bool {
            return true;
        }
    }

    $me = new CPF();

    $me->setNumber('39084495888');
    var_dump($me->validate());
    var_dump($me->getNumber());

?>