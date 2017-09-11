<?php
    session_start();

    
    echo "<hr/>";
    if(isset($_SESSION["id"])){
    echo "<br/>nombre usuario : ".$_SESSION["usuario"];
    echo "<br/>id usuario : ".$_SESSION["id"];
        echo "<br/>rol usuario : ".$_SESSION["rol"];
    }else{
        echo "error no pudiste entrar";
    }
?>