<?php
    /* declaración ed variables
        ejemplo 06 uso de comillas simple y dobles para mostar las variables
    */
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
            // Comillas simples
            echo '<b>Nombre: </b> $nombre<br>';

            // Comillas dobles
            echo "<b>Nombre: </b> $nombre<br>";

            // Solución de comillas simples y concatenación
            echo '<b>Nombre: </b>'. $nombre .'<br>';
         ?>

            
      

    </body>
</html>