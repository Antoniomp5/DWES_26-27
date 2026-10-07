<?php
/*
    Actividad 2.1.1
    Descripción: uso de las variables
    - Un título
    - un párrafo
    - un enlace

    Alumno: Antonio Hernández Gilabert
    Fecha: 30/09/2026
*/

// Modelo
// Include 'model.index.php'

// Negocioado de la aplicación en php

$titulo = "Mi primer titulo en PHP";

$parrafo = "Mi primer parrafo escrito en PHP, en enlace de abajo te llevará a la web de El País <br>
sumado a que este úlitmo tendrá de forma obligatoria 3 parrafos así que <br>
ese es el último parrafo";

$enlace = "http://www.elpais.es";
// Vista de la aplicación en html

include 'view.index.php';
