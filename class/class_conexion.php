<?php
    class conexion{
        
        private $server = "localhost";
        private $user = "root";
        private $pwd = "";
        private $db = "php_db";
        private $con ="";
        
        
        function __construct(){
            $this->con = mysqli_connect($this->server,$this->user,$this->pwd,$this->db);
            if(!($this->con)){
                die("Error de conexion.".$this->con->error);
            }
            echo "exito";
        }
        
        public function getConect(){
            return $this->con;
        }
    }

?>