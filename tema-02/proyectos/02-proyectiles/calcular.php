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
$velocidad_inicial = (float)($_POST['velocidad_inicial'] ?? 0);
$angulo_lanzamiento = (float)($_POST['angulo_lanzamiento'] ?? 0);


//Realizar los cálculos
$angulo_rad = deg2rad($angulo_lanzamiento);
$vx = $velocidad_inicial * cos($angulo_rad);
$vy = $velocidad_inicial * sin($angulo_rad);
$tiempo_de_vuelo = (2 * $vy) / G;
$max_altura = ($vy ** 2) / (2 * G);
$distancia_horizontal = $vx * $tiempo_de_vuelo;

//Conversión a la coma decimal
$velocidad_inicial = number_format($velocidad_inicial, 2, ',', '.');
$angulo_lanzamiento = number_format($angulo_lanzamiento, 2, ',', '.');
$angulo_rad = number_format($angulo_rad, 2, ',', '.');
$vx = number_format($vx, 2, ',', '.');
$vy = number_format($vy, 2, ',', '.');
$tiempo_de_vuelo = number_format($tiempo_de_vuelo, 2, ',', '.');
$max_altura= number_format($max_altura, 2, ',', '.');
$distancia_horizontal = number_format($distancia_horizontal, 2, ',', '.');

//vista
include'views/calculos.view.php';
