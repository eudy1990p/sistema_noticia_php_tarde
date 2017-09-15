<?php
    require_once("../class/class_ini.php");
    //$noticia = new Noticia($conexion->getConect());
    

    if(isset($_POST["accion"])){
        switch($_POST["accion"]){
            case "agregar":
$noticia->asignarAtributos($_POST["titulo"],$_POST["cuerpo"],$_FILES,$_POST["idCategoria"],$_SESSION["id"]);
$noticia->insert();
               // die("stop");
                break;
                
            case "editar":
                $categoria->editar($_POST["id"],$_POST["nombre"]);
                break;
                
        }
           
    }
    
    if(isset($_GET["eliminarID"])){
        
        $noticia->eliminar($_GET["eliminarID"]);
    }    header("location:../noticias.php");
     

?>