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

                echo form_fieldset('Serch for Updating  Information');
                echo form_open('Empresa/get_empresa');
                echo "<br>";
                echo form_input('empresa_id', 'empresa_id');
                echo form_submit('myBuscarUpdate', 'Buscar!');
                echo form_close();
                echo form_fieldset_close();

                if (!empty($empresa)) {
//                    echo "<pre>";
//                    print_r($json);
//                    echo "</pre>";
                    echo form_fieldset('Update Information');
                    echo form_open('Empresa/update_empresa');
                    echo "<br>";
                    echo form_hidden('empresa_id', $empresa['empresa_id']);
                    echo "<br>";
                    echo form_input('nombre', $empresa['nombre']);
                    echo "<br>";
                    echo form_input('fecha_registro', $empresa['fecha_registro']);
                    echo "<br>";
                    echo form_input('nit', $empresa['nit']);
                    echo "<br>";
                    echo form_submit('myGuardar', 'Guardar!');
                    echo form_close();
                    echo form_fieldset_close();
                }
                ?>

            </div>

            <p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
        </div>

    </body>

</html>