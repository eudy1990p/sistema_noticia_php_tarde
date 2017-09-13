<?php
    session_start();
    require_once("class_conexion.php");
    require_once("class_login.php");
    require_once("class_categoria.php");
    require_once("class_noticia.php");

    $conexion = new conexion();
    $categoria = new Categoria($conexion->getConect());
    
?>