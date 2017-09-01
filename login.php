<?php 
    require_once("header.php");
?>
  <section>
        <h2>Login</h2>
        <form action="procesar/pro_login.php" method="post">
            <label>Usuario</label>
            <input type="text" name="usuario" placeholder="usuario" />
            <br/><br/>
            <label>Clave</label>
            <input type="password" name="clave" placeholder="" />
            <!--<input type="submit" value="Entrar" />--><br/><br/>
            <button type="submit">Entrar</button>
        </form><br/><br/><br/>
        </section>
        
<?php 
    require_once("aside.php");
?>
<?php 
    require_once("footer.php");
?>