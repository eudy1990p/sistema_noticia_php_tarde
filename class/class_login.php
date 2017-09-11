<?php
    
class Login{
    
    private $con = "";
    private $nombreUsuario="";
    private $claveUsuario="";
    private $idUsuario="";
    private $rolUsuario="";
    
    function __construct($conect){
        $this->con = $conect;
        //echo "estoy en el construct login<br/>";
    }
    
    public function asignarAtributos($usuario,$clave){
        $this->nombreUsuario = $usuario;
        $this->claveUsuario = $clave;
    }
    
    public function validarUsuario(){
        $sql = "select * from usuarios where nombre = '".$this->nombreUsuario."' and clave = '".$this->claveUsuario."' ";
        //echo "<pre>".$sql."</pre>";
        $query  = $this->con->query($sql);
        if($query){
            if(mysqli_num_rows($query) > 0){
                $datosUsuario = mysqli_fetch_object($query);
                
                $_SESSION["usuario"] = $datosUsuario->nombre; 
                $_SESSION["rol"] = $datosUsuario->rol;
                $_SESSION["id"] = $datosUsuario->id;
                header("location:../index.php");
               
            }else{
                //echo "no puede entrar";
                header("location:../login.php");
            }
        }else{
            echo "error validando usuario";
        }
        
        
    }

    
    public function echoPrueba(){
        echo "<br/>";
        echo "nombre usuario ".$this->nombreUsuario;
        echo "<br/>";
        echo "clave usuario ".$this->claveUsuario;
        echo "<br/>";
    }
    
}

?>