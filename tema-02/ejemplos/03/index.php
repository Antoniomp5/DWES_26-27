<?php
    // declaración ed variables
    $nombre = "Juan";
    $apellidos = "Pérez López";
    $edad = 30;
    $poblacion = "Madrid";
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ficha de alumnos</title>
    </head>
    <body>
        <h1>Datos de los alumnos<br /></h1>
        <?php
            // Este es un comentario en PHP
            echo "<b>Nombre: </b>", $nombre, "<br>";
            echo "<b>Apellidos: </b>", $apellidos, "<br>";
            echo "<b>Edad: </b>", $edad, "<br>";
            echo "<b>Población: </b>", $poblacion, "<br>";

            /*
                Este es un 
                cometario de
                varias líneas en PHP
            */
        ?>

    </body>
</html>