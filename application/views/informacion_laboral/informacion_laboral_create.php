<!DOCTYPE html>

<html lang="en">

    <head>

        <meta charset="utf-8" />

        <title> Di-hok </title>

        <?php
        echo snappy_style(array(
            array('main.css'),
            array('jquery-ui-1.8.18.custom.css')
        )) . snappy_script(array(
            'jquery-1.7.1.js',
            'jquery-ui-1.8.18.custom.min.js',
            'tiny_mce/jquery.tinymce.js'
        ));
        ?>

    </head>

    <body>

        <div id="container">
            <h1> Informacion_laboral</h1>

            <div id="body">

                <?php
                $this->load->helper('form');
                echo form_fieldset('User  create Information');
                echo form_open('Informacion_laboral/set_informacion_laboral');
                echo "<br>";
                ?>    

                <div class="row">
                    <div class="large-12 columns">
                        <label>Profesiones:
<?php echo form_dropdown('profesiones_id', array('aa', 'bbb')); ?>
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="large-12 columns">
                        <label>Perfil:
                            <?php echo form_textarea('perfil_laboral', ''); ?>
                        </label>
                    </div>
                </div> 
                <?php
                echo "<br>";
                echo form_input('traslado', '');
                echo "<br>";
                echo form_submit('mysubmit', 'Submit Post!');
                echo form_close();
                echo form_fieldset_close();
                echo anchor('Empresa/router/cerrar', 'cerrar Session');
                ?>

            </div>

            <p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
        </div>

    </body>

</html>