<?php

    class User {

        private $id;
        private $login;
        private $password;
        private $dateRegister;

        public function __construct() {}

        public function getId() {
            return $this->id;
        }

        public function setId($value) {
            $this->id = $value;
        }

        public function getLogin() {
            return $this->login;
        }

        public function setLogin($value) {
            $this->login = $value;
        }

        public function getPassword() {
            return $this->password;
        }

        public function setPassword($value) {
            $this->password = $value;
        }

        public function getDateRegister() {
            return $this->dateRegister;
        }

        public function setDateRegister($value) {
            $this->dateRegister = $value;
        }

        public function loadById($id) {
            $sql = new SQL();

            $results = $sql->select('SELECT * FROM tb_usuarios WHERE idusuario = :ID', [ ':ID' => $id ]);

            if (count($results) > 0) {

                $row = $results[0];

                $this->setId($row['idusuario']);
                $this->setLogin($row['deslogin']);
                $this->setPassword($row['dessenha']);
                $this->setDateRegister(new DateTime($row['dtcadastro']));
            }
        }

        public static function getList() {
            $sql = new SQL();

            return $sql->select('SELECT * FROM tb_usuarios');
        }

        public function login() {

        }

        public function __toString() {
            return json_encode([
                'id' => $this->getId(),
                'login' => $this->getLogin(),
                'password' => $this->getPassword(),
                'date_register' => $this->getDateRegister()->format('d/m/Y H:i:s')
            ]);
        }
    }

?>
