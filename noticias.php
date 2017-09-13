<?php 
    require_once("header.php");
 
$nombre = "";
$cuerpo =""; 
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
        <h2>Notacia</h2>
            <form action="procesar/pro_noticia.php" method="post" enctype="multipart/form-data" >
                <input name="accion" value="<?php echo $accion; ?>" type="hidden" />
                <?php if($activarEditar){ ?>
                <input name="id" value="<?php echo $id; ?>" type="hidden" />
                <?php } ?>
                Categoria<br/>
                <select name="idCategoria">
                    <?php
    
        $queryCategoria=$categoria->getCategorias();
        while($registroCategoria = $queryCategoria->fetch_object()){    
            ?>
                <option value="<?php echo $registroCategoria->id; ?>" ><?php echo $registroCategoria->nombre; ?></option>
            <?php } ?>
                </select><br/><br/>
                
                Titulo <br/>
                
                <input name="titulo" type="text" placeholder="Titulo" value="<?php  echo  $nombre; ?>" /><br/> <br/>
                
                Cuerpo <br/>
                <textarea name="cuerpo" type="text" placeholder="Cuerpo" value="<?php  echo  $cuerpo; ?>" ></textarea><br/> <br/>
                
                Subir imagen<br/>
                <input type="file" name="imagen"/><br/><br/>
                
                
                
                
                <?php if($activarEditar){ ?>
                <a href="noticias.php">Cancelar</a>
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
                    <a onclick="confirmarEliminar('procesar/pro_categoria.php?eliminarID=<?php echo $registro->id; ?>');" href="javascript:void(0);">Eliminar</a></td>
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
<script type="text/javascript">
    function confirmarEliminar(ruta){
        
        var resp = confirm('Desea eliminar este registro');
        console.log(resp);
        if(resp){
           window.location=ruta;
           }
    }
</script>