<?php echo $this->view('encabezado'); ?>

<div id="contenedor">
    <div id="columna1" class="column">
        <?php echo $this->view('izquierda'); ?>
    </div>

    <div id="columna-derecha" >
        <div id="columna2" >
           
            
            <?php
//            echo '<pre>';
//            print_r($users);
            echo $this->view($content); ?>
        </div>
    </div>
    <div id="columna3" ></div>
</div>
<div id="pie">
    <?php echo $this->view('pie'); ?>
</div>