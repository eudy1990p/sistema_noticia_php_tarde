<?php 
    require_once("header.php");
?>
        <!--- -------------------------------->
        <section>
            <?php
    
        $query=$noticia->getNoticiasUltimo9();
        while($registro = $query->fetch_object()){    
            ?>
            <article>
                <img src="upload_img/<?php echo $registro->url_img; ?>" alt="IMG Article" />
                <h3><?php echo $registro->titulo; ?></h3>
                <p>
                    <?php echo substr($registro->cuerpo,0,20); ?>
                    <a href="detalle_noticia.php?noticia_id=<?php echo $registro->id; ?>"> leer mas</a>
                </p>
            </article>
            <?php } ?>
            
            
        </section>
        <!--- -------------------------------->
       <?php 
    require_once("aside.php");
?>
<?php 
    require_once("footer.php");
?>