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
            <h1> Registro_empresa</h1>

            <div id="body">               
                
                <?php
                $this->load->helper('form');                
                echo form_open('Registro_empresa/set_registro_empresa');
                echo form_fieldset('Informacion del encargado de administrar el sistema.');
                ?>   
                
                <div class="row">
                    <div class="large-12 columns">
                        <label>Nombres:
                            <?php echo form_input('nombre', ''); ?>
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="large-12 columns">
                        <label>Apellidos:
                            <?php echo form_input('apellido', ''); ?>
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="large-12 columns">
                        <label>Tipo Indentificacion:
                            <?php echo form_dropdown('tipo_tercero_id', array('CC', 'NIT')); ?>
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="large-12 columns">
                        <label>Documento de Identificacion:
                            <?php echo form_input('tercero_id', ''); ?>
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="large-12 columns">
                        <label>Cargo:
                            <?php echo form_input('cargo', ''); ?>
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="large-12 columns">
                        <label>Direccion:
                            <?php echo form_input('direccion', ''); ?>
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="large-12 columns">
                        <label>Telefono 1:
                            <?php echo form_input('telefono1', ''); ?>
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="large-12 columns">
                        <label>Extension 1:
                            <?php echo form_input('extencion1', ''); ?>
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="large-12 columns">
                        <label>Telefono 2:
                            <?php echo form_input('telefono2', ''); ?>
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="large-12 columns">
                        <label>Extension 2:
                            <?php echo form_input('extencion2', ''); ?>
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="large-12 columns">
                        <label>Email:
                            <?php echo form_input('correo', ''); ?>
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="large-12 columns">
                        <label>Confirmar Email:
                            <?php echo form_input('correo', ''); ?>
                        </label>
                    </div>
                </div>
                
                <?php
                echo form_fieldset_close();                
                echo form_fieldset('Informacion de la Organizacion.');
                ?>  
                
                <div class="row">
                    <div class="large-12 columns">
                        <label>Razón Social:
                            <?php echo form_input('razon_social', ''); ?>
                        </label>
                    </div>
                </div>
                <!--FALTA METER A tipo_tercero_empresa_id-->
                <div class="row">
                    <div class="large-12 columns">
                        <label>NIT:
                            <?php echo form_input('tercero_empresa_id', ''); ?>
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="large-12 columns">
                        <label>Pagina Web:
                            <?php echo form_input('pagina_web', ''); ?>
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="large-12 columns">
                        <label>Pais:
                            <?php echo form_dropdown('pais', array('COLOMBIA', 'ARGENTINA', 'BRASIL')); ?>
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="large-12 columns">
                        <label>Ciudad:
                            <?php echo form_dropdown('pais', array('TULUÁ', 'BUGA', 'PALMIRA')); ?>
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="large-12 columns">
                        <label>Direccion:
                            <?php echo form_input('direccion_empresa', ''); ?>
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="large-12 columns">
                        <label>Telefono 1:
                            <?php echo form_input('telefono_empresa1', ''); ?>
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="large-12 columns">
                        <label>Telefono 2:
                            <?php echo form_input('telefono_empresa2', ''); ?>
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="large-12 columns">
                        <label>Tipo:
                            <?php echo form_dropdown('tipo', array()); ?>
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="large-12 columns">
                        <label>Sector:
                            <?php echo form_dropdown('sector', array()); ?>
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="large-12 columns">
                        <label>Actividad Economica:
                            <?php echo form_dropdown('actividad_economica', array()); ?>
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="large-12 columns">
                        <label>Codigo actividad economica:
                            <?php echo form_dropdown('codigo_actividad_economica', array()); ?>
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="large-12 columns">
                        <label>Contraseña:
                            <?php echo form_input('password', ''); ?>
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="large-12 columns">
                        <label>Contraseña:
                            <?php echo form_input('password', ''); ?>
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="large-12 columns">
                        <label>Representarte Legal:
                            <?php echo form_input('', ''); ?>
                        </label>
                    </div>
                </div>
                
                
                <?php
                echo form_fieldset_close();                
                echo form_submit('mysubmit', 'Submit Post!');
                echo form_close();                
                ?>

            </div>

            <p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
        </div>

    </body>

</html>