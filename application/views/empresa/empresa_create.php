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
            <h1> Empresas</h1>

            <div id="body">

                <?php
                $this->load->helper('form');
                echo form_fieldset('User  create Information');
                echo form_open('Empresa/set_empresa');
                echo "<br>";
                echo form_input('nombre', '');
                echo "<br>";
                echo form_input('fecha_registro', '');
                echo "<br>";
                echo form_input('nit', '');
                echo "<br>";
                echo form_submit('mysubmit', 'Submit Post!');
                echo form_close();
                echo form_fieldset_close();
                ?>

            </div>

            <p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
        </div>

    </body>

</html>