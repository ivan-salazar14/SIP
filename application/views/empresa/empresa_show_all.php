<!DOCTYPE html>

<html lang="en">

    <head>

        <meta charset="utf-8" />

        <title> Di-hok </title>

        <?php
        echo snappy_style(array(array('main.css'), array('jquery-ui-1.8.18.custom.css'))) . snappy_script(array('jquery-1.7.1.js', 'jquery-ui-1.8.18.custom.min.js', 'tiny_mce/jquery.tinymce.js'));
        ?>

    </head>

    <body>

        <div id="container">
            <h1> Empresas</h1>

            <div id="body">

                <?php
                for ($i = 0; sizeof($lista_empresas) > $i; $i++) {
                    foreach ($lista_empresas[$i] as $key => $value) {
                        echo $key . " = " . $value . "<br>";
                    }
                }
//                echo "<pre>";
//  form              print_r($json);
//                echo "</pre>";
                ?>
            </div>

            <p class="footer">
				Page rendered in <strong>{elapsed_time}</strong> seconds
            </p>
        </div>

    </body>

</html>