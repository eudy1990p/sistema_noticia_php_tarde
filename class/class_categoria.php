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
        public function editar($id,$nombre){
              $sql = "update categorias set nombre = '".$nombre."'
              where id=".$id."
              ";
              $query = $this->con->query($sql);
                
        }
        public function eliminar($id){
             echo $sql = "delete from categorias
              where id=".$id."
              ";
              $query = $this->con->query($sql);
                
        }
        public function getCategorias(){
              $sql = "select * from categorias";
              $query = $this->con->query($sql);
            return $query;
        }
        
        public function getCategoria($id){
              $sql = "select * from categorias where id=".$id." ";
              $query = $this->con->query($sql);
             $RCategoria =$query->fetch_object();
            return $RCategoria;
        }
        
    }
?>