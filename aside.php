<aside>
    <h3>Lista Categorias</h3>
            <ul>
                <?php
    
            $query=$categoria->getCategorias();
            while($registro = $query->fetch_object()){    
                ?>
                <li><a href="mostra_por_categoria.php?id_categoria=<?php echo  $registro->id; ?>"><?php echo  strtoupper($registro->nombre); ?></a></li>
                <?php } ?>
            </ul>
        </aside>