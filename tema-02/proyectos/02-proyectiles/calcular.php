<?php
/*
    * Proyecto: Lazamiento de proyectiles
    * Descripción: Calculadora de lanzamiento de proyectiles que realiza
        cálculos de la trayectoria de un proyectil lanzado con una velocidad inicial y un ángulo de lanzamiento determinados.
    * Autor: Antonio Hernández Gilabert
    * Fecha: 06/10/2026
*/

//Modelo

//Negociado
//Recoger los valores del formulario
define('G', 9.81); // Aceleración debida a la gravedad en m/s²
$velocidad_inicial = (float)$_POST['velocidad_inicial'] ?? 0;
$angulo_lanzamiento = (float)$_POST['angulo_lanzamiento'] ?? 0;

//Realizar los cálculos
$angulo_rad = deg2rad($angulo_lanzamiento);
$vx = $velocidad_inicial * cos($angulo_rad);
$vy = $velocidad_inicial * sin($angulo_rad);
$time_of_flight = (2 * $vy) / G;
$max_height = ($vy ** 2) / (2 * G);
$horizontal_distance = $vx * $time_of_flight;

//vista
include'views/calculos.view.php';
