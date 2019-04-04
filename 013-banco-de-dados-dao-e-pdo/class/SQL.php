<?php 

    class SQL extends PDO {
        
        private $connection;

        public function __construct() {
            $this->connection = new PDO(
                'mysql:host=localhost;dbname=dbphp7',
                'root',
                ''
            );
        }
        
        private function setParameter($statement, $key, $value) {
            $statement->bindParam($key, $value);
        }

        private function setParameters($statement, $parameters = []) {
            foreach($parameters as $key => $value) {
                $this->setParameter($statement, $key, $value);
            }
        }

        public function query($rawQuery, $parameters = []) {
            $statement = $this->connection->prepare($rawQuery);

            $this->setParameters($statement, $parameters);

            $statement->execute();

            return $statement;
        }

        public function select($rawQuery, $parameters = []):array {
            $statement = $this->query($rawQuery, $parameters);

            return $statement->fetchAll(PDO::FETCH_ASSOC);
        }
    }
?>