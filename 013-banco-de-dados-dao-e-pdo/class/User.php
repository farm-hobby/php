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

        public function setData($data) {
            $this->setId($data['idusuarios']);
            $this->setLogin($data['deslogin']);
            $this->setPassword($data['dessenha']);
            $this->setDateRegister(new DateTime($data['dtcadastro']));
        }

        public function loadById($id) {
            $sql = new SQL();

            $results = $sql->select('SELECT * FROM tb_usuarios WHERE idusuario = :ID', [ ':ID' => $id ]);

            if (count($results) > 0) {
                $this->setData($results[0]);
            }
        }

        public static function getList() {
            $sql = new SQL();

            return $sql->select('SELECT * FROM tb_usuarios');
        }

        public static function search($login) {
            $sql = new SQL();

            return $sql->select(
                'SELECT * FROM tb_usuarios WHERE deslogin LIKE :SEARCH ORDER BY deslogin',
                [':SEARCH' => "%$login%"]
            );
        }

        public function login($login, $password) {
            $sql = new SQL();

            $results = $sql->select(
                'SELECT * FROM tb_usuarios WHERE deslogin = :LOGIN and dessenha = :PASSWORD',
                [
                    ':LOGIN' => $login,
                    ':PASSWORD' => $password
                ]
            );

            if (count($results) > 0) {
                $this->setData($results[0]);
            } else {
                throw new Exception('Login e/ou Senha inválidos!');
            }
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
