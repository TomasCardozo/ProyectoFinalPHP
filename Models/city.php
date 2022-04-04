<?php
    require_once '../config/connection.php';

    class city{
        public $id;
        public $city;
        public $country;
        public $population;
        public $surface;
        public $subway;
        public $connection;

        public function __construct (){
            $this->id = 0;
            $this->city = '';
            $this->country = '';
            $this->population = '';
            $this->surface = '';
            $this->subway = '';
            $this->connection = new connection();
        }

        public static function show (){
            $connection = new Connection ();
            $mySql = "SELECT * FROM ciudades";
            $show = $connection->queryQ($mySql);
            $connection->closeQ();
            return $show;
        }

        public static function show6 ($start, $page){
            $fivePage = 6;

            $connection = new Connection ();
            $mySql = "SELECT * FROM ciudades"." limit " . $start . "," . $fivePage;
            $show5 = $connection->queryQ($mySql);
            $connection->closeQ();
            return $show5;
        }
        
        public static function getByID($idPas){
            $connection = new connection ();
            $show = $connection->queryQ("SELECT * FROM ciudades WHERE ID=$idPas");
            $connection->closeQ();
            return $show[0];
        }

        public function create (){
            $in = "INSERT INTO ciudades (Ciudad, Pais, Habitantes, Superficie, Metro) VALUES('$this->city', '$this->country', '$this->population', '$this->surface', '$this->subway')";
            $ans = $this->connection->updateQ($in);
            $this->connection->closeQ();
            return $ans;
        }

        public function delete (){
            $in = "DELETE FROM ciudades WHERE ID=$this->id";
            $ans = $this->connection->updateQ($in);
            $this->connection->closeQ();
            return $ans;
        }

        public function update (){
            $in = "UPDATE ciudades SET Ciudad='$this->city', Pais='$this->country', Habitantes='$this->population', Superficie='$this->surface', Metro='$this->subway' WHERE ID=$this->id";
            $ans = $this->connection->updateQ($in);
            $this->connection->closeQ();
            return $ans;
        }

    }
?>