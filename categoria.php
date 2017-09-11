<?php 
    require_once("header.php");
?>
  <section>
        <h2>Categoria</h2>
            <form action="procesar/pro_categoria.php" method="post" >
                <input name="accion" value="agregar" type="hidden" />
                Nombre <br/> 
                <input name="nombre" type="text" placeholder="Nombre Categoria"/><br/> <br/> 
                <button type="submit">Agregar</button>
            </form>
        </section>
        
<?php 
    require_once("aside.php");
?>
<?php 
    require_once("footer.php");
?>