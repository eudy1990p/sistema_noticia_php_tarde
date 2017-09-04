<?php
    require_once("../class/class_ini.php");
    
    $login = new Login($conexion->getConect());

    $login->asignarAtributos($_POST["usuario"],$_POST["clave"]);
    $login->validarUsuario();
    
    /*$login->echoPrueba();
    $login->asignarAtributos("nombre del usuario","clave del usuario");
    $login->echoPrueba();*/
?>