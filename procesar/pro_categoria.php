<?php
    require_once("../class/class_ini.php");
    $categoria = new Categoria($conexion->getConect());

    if(isset($_POST["accion"])){
        switch($_POST["accion"]){
            case "agregar":
                $categoria->asignarAtributos($_POST["nombre"],$_SESSION["id"]);
                $categoria->insert();
                break;
                
            case "editar":
                $categoria->editar($_POST["id"],$_POST["nombre"]);
                break;
                
        }
           
    }
    
    if(isset($_GET["eliminarID"])){
        
        $categoria->eliminar($_GET["eliminarID"]);
    }    header("location:../categoria.php");
     

?>