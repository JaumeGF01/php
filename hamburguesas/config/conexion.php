<?php
    class conexion{
        private $pdo;
        private $host;
        private $nombreDB;
        private $user;
        private $password;

        public function __construct()
        {
            $this->pdo="";
            $this->host="localhost";  
            $this->nombreDB="restaurant3";
            $this->user="root";
            $this->password="";
        }

        public function conectar(){
            try {
                $this -> pdo = new PDO("mysql:host=$this->host;dbname=$this->nombreDB;charset=utf8", $this->user, $this->password);
                return $this->pdo;
            } catch (PDOException $e) {
                print "<p class = \"aviso\"> Error: No se pudo conectar con la base de datos. {$e->getMessage()}</p> \n";
                exit;
            }
        }
    }
?>