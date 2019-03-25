<?php

    class Register {

        private $name;
        private $email;
        private $password;

        public function getName():string {
            return $this->name;
        }

        public function setName($name) {
            $this->name = $name;
        }

        public function getEmail():string {
            return $this->email;
        }

        public function setEmail($email) {
            $this->email = $email;
        }

        public function getPassword():string {
            return $this->password;
        }

        public function setPassword($password) {
            $this->password = $password;
        }

        public function __toString() {
            return json_encode([
                "name" => $this->getName(),
                "email" => $this->getEmail(),
                "password" => $this->getPassword()
            ]);
        }
    }

?>
