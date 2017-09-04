<?php
    session_start();

    print_r($_SESSION);

    echo "<br/>nombre usuario : ".$_SESSION["usuario"];
echo "<br/>id usuario : ".$_SESSION["id"];
echo "<br/>rol usuario : ".$_SESSION["rol"];
?>