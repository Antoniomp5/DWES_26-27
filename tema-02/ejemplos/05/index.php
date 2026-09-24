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

        <!-- Muestro los datos de los alumnos -->
        <b>Nombre:  </b> <?= $nombre; ?> </br>
        <b>Apellidos:  </b>  <?= $apellidos; ?> </br>
        <b>Edad: </b> <?=  $edad; ?> </br>
        <b>Población: </b> <?= $poblacion; ?> </br>

            
      

    </body>
</html>