<?php

    class Categoria{
        
        private $con = "";
        private $nombre = "";
        private $idUsuarioConectado = "";
        
        function __construct($conect){
            $this->con = $conect;
        }
        public function asignarAtributos($nombreCategoria,$idUsuario){
            $this->nombre = $nombreCategoria;
            $this->idUsuarioConectado = $idUsuario;
        }
        
        public function insert(){
              $sql = "insert into categorias (nombre,fecha,usuario_id)
              values('".$this->nombre."',now(),'".$this->idUsuarioConectado."')";
              $query = $this->con->query($sql);
            
        }
        
    }
?>