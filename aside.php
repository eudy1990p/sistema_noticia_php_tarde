<aside>
    <h3>Lista Categorias</h3>
            <ul>
                <?php
    
            $query=$categoria->getCategorias();
            while($registro = $query->fetch_object()){    
                ?>
                <li><a href="#"><?php echo  strtoupper($registro->nombre); ?></a></li>
                <?php } ?>
            </ul>
        </aside>