<?php

    namespace Client;

    class Register extends \Register {

        public function addSale() {
            return 'Was registered a sale from client ' . $this->getName();
        }

        public function __toString() {
            return '[Name, Email, Password, addSale:Method]';
        }
    }
?>
