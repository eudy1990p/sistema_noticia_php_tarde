<?php require_once("class/class_ini.php"); ?>
<!doctype html>
<html>
    <head>
        <title>
            Sistema Noticias
        </title>
        <link type="text/css" rel="stylesheet" href="css/style.css" />
    </head>
    <body>
        <header>
            <img src="img/logo.jpg" />
            <h1>Sistema Noticias</h1>
        </header>
        <nav>
            <ul>
                <li>
                    <a href="index.php">
                        INICIO
                    </a>
                </li>
                <li>
                    <a href="comida.php">
                        COMIDA
                    </a>
                </li>
                <li>
                    <a href="informatica.php">
                        INFORMATICA
                    </a>
                </li>
                <li>
                    <a href="#">
                        NOSOTROS
                    </a>
                </li>
                <li>
                    <a href="contacto.php">
                        CONTACTO
                    </a>
                </li>
                <?php if(isset($_SESSION["id"])){ ?>
                <li>
                    <a href="procesar/pro_salir_login.php">
                        <?php echo $_SESSION["usuario"]; ?> DESEA SALIR? 
                    </a>
                </li>
                <li>
                    <a href="categoria.php">
                        Categoria
                    </a>
                </li>
                <?php }else{ ?>
                <li>
                    <a href="login.php">
                        LOGIN
                    </a>
                </li>
                <?php } ?>
            </ul>
        </nav>