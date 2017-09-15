<?php 
    require_once("header.php");
?>
        <!--- -------------------------------->




<section>
            <?php
        $NoticiaData=$noticia->getNoticia($_GET["noticia_id"]);
        ?>
            <article>
                <img src="upload_img/<?php echo $NoticiaData->url_img; ?>" alt="IMG Article" />
                <h3><?php echo $NoticiaData->titulo; ?></h3>
                <p>
                    <?php echo $NoticiaData->cuerpo; ?>
                    
                </p>
            </article>
            
            
        </section>


  <!--- -------------------------------->
       <?php 
    require_once("aside.php");
?>
<?php 
    require_once("footer.php");
?>