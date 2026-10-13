<?php
    /*
        Examen Práctico Tema 2: Inserción de Código en Páginas WEB.
        Curso: 26/27

        Nombre: Antonio Hernández Gilabert
    */

    //Modelo

    //Negociado
    
    //Variables de entrada
    $velocidad_inicial = (float)($_POST['velocidad_inicial'] ?? 0);
    $aceleracion_inicial = (float)($_POST['velocidad_inicial'] ?? 0);
    $tiempo_inicial = (float)($_POST['velocidad_inicial'] ?? 0);
    $masa_objeto = (float)($_POST['velocidad_inicial'] ?? 0);

    //Calculo de las variables
    $velocidad_final = $velocidad_inicial + $aceleracion_inicial * $tiempo_inicial;
    $espacio_recorrido = $velocidad_inicial * $tiempo_inicial + 0.5 * $aceleracion_inicial * pow($tiempo_inicial, 2);
    $fuerza_neta = $masa_objeto * $aceleracion_inicial;
    $cinetica_final = 0.5 * $masa_objeto * pow($velocidad_inicial, 2);

    //Conversoón al formato europeo
    $velocidad_inicial = number_format($velocidad_inicial, 2, ',', '.');
    $aceleracion_inicial = number_format($aceleracion_inicial, 2, ',', '.');
    $tiempo_inicial = number_format($tiempo_inicial, 2, ',', '.');
    $masa_objeto = number_format($masa_objeto, 2, ',', '.');
    $velocidad_final = number_format($velocidad_final, 2, ',', '.');
    $espacio_recorrido = number_format($espacio_recorrido, 2, ',', '.');
    $fuerza_neta = number_format($fuerza_neta, 2, ',', '.');
    $cinetica_final = number_format($cinetica_final, 2, ',', '.');

    //Vista

    include "views/view.resultado.php";

