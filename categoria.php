<?php 
    require_once("header.php");
$categoria = new Categoria($conexion->getConect());    
$nombre = "";
$accion = "agregar";
$id = "";
    if(isset($_GET["activarEditar"])){
        $activarEditar = true;
        $r = $categoria->getCategoria($_GET["activarEditar"]);
        $nombre= $r->nombre;
        $id = $r->id;
        $accion = "editar";
    }else{ $activarEditar = false; }
    
?>
  <section>
        <h2>Categoria</h2>
            <form action="procesar/pro_categoria.php" method="post" >
                <input name="accion" value="<?php echo $accion; ?>" type="hidden" />
                <?php if($activarEditar){ ?>
                <input name="id" value="<?php echo $id; ?>" type="hidden" />
                <?php } ?>
                Nombre <br/>
                
                <input name="nombre" type="text" placeholder="Nombre Categoria" value="<?php  echo  $nombre; ?>" /><br/> <br/> 
                <?php if($activarEditar){ ?>
                <a href="categoria.php">Cancelar</a>
                <button type="submit">Editar</button> 
                <?php }else{ ?>                                             <button type="submit">Agregar</button>
                <?php } ?>
            </form>
                
            <table>
                <tr>
                    <th>Operacion</th>
                    <th>ID</th>
                    <th>Nombre</th>
                </tr>
                <?php
    
        $query=$categoria->getCategorias();
        while($registro = $query->fetch_object()){    
            ?>
                <tr>
                    <td><a href="?activarEditar=<?php echo $registro->id; ?>">Editar</a><br/>
                    <a href="procesar/pro_categoria.php?eliminarID=<?php echo $registro->id; ?>">Eliminar</a></td>
                    <td><?php echo $registro->id; ?></td>
                    <td><?php echo $registro->nombre; ?></td>
                </tr>
        
        <?php } ?>
            </table>
      
      
        </section>
        
<?php 
    require_once("aside.php");
?>
<?php 
    require_once("footer.php");
?>