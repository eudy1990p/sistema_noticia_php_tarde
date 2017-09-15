<?php

    class Noticia{
        
        private $con = "";
        private $titulo = "";
        private $cuerpo = "";
        private $urlImg = "";
        private $archivo = "";
        private $idCategoria = "";
        private $idUsuarioConectado = "";
        
        function __construct($conect){
            $this->con = $conect;
        }
        public function asignarAtributos($titulo,$cuerpo,$archivo,$idCategoria,$idUsuario){
            $this->titulo = $titulo;
            $this->cuerpo = $cuerpo;
            $this->archivo = $archivo;
            $this->idCategoria = $idCategoria;
            $this->idUsuarioConectado = $idUsuario;
        }
        
        public function insert(){
             $nombreArchivo = $this->subirArchivo();
            
              $sql = "insert into noticias (titulo,cuerpo,url_img,categoria_id,fecha,usuario_id)
              values('".$this->titulo."','".$this->cuerpo."','".$nombreArchivo."','".$this->idCategoria."',now(),'".$this->idUsuarioConectado."')";
            
              $query = $this->con->query($sql);
            
            //die($sql);
        }
        
        public function subirArchivo(){
                $this->archivo;
                $c = copy($this->archivo["imagen"]["tmp_name"],"../upload_img/".$this->archivo["imagen"]["name"]);

                if($c){
                    return $this->archivo["imagen"]["name"];
                }else{
                    return false;
                }

        }
        
        public function editar($id,$nombre){
              $sql = "update categorias set nombre = '".$nombre."'
              where id=".$id."
              ";
              $query = $this->con->query($sql);
                
        }
        public function eliminar($id){
             echo $sql = "delete from noticias
              where id=".$id."
              ";
              $query = $this->con->query($sql);
                
        }
        public function getNoticias(){
              $sql = "select * from noticias order by id desc";
              $query = $this->con->query($sql);
            return $query;
        }
        public function getNoticiasUltimo9(){
              $sql = "select * from noticias order by id desc limit 9";
              $query = $this->con->query($sql);
            return $query;
        }
        public function getNoticiasPorCategoria($idCategoria){
             $sql = "select * from noticias where categoria_id='".$idCategoria."' order by id desc";
              $query = $this->con->query($sql);
            return $query;
        }
        
        public function getNoticia($id){
              $sql = "select * from noticias where id=".$id."  ";
              $query = $this->con->query($sql);
             $RNoticia =$query->fetch_object();
            return $RNoticia;
        }
        
    }
?>