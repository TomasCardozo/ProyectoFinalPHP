<?php
    class connection{
        private $connection;

        public function __construct (){
            $this->connection = new mysqli('localhost', 'root', '', 'capitales');
            $this->connection->set_charset('utf8');
        }

        public function queryQ ($mysql){
            return $this->connection->query($mysql)->fetch_all();
        }

        public function updateQ ($mysql){
            return $this->connection->query($mysql);
        }

        public function closeQ (){
            $this->connection->close();
        }
    }
?>