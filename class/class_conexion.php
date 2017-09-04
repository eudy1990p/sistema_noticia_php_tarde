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
            //echo "conexion exitosa desde el construct<br/>";
            //echo "exito";
        }
        
        public function getConect(){
            //echo "estoy enviando la conexion <br/>";
            return $this->con;
        }
    }

?>