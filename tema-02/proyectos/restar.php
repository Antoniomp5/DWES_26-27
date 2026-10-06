<?php
/*
    * Proyecto: Calculadora
    * Descripción: Calculadora básica que realiza operaciones aritméticas simples: 
        - suma
        - resta
        - multiplicación
        - división
        - potencia

    * Autor: Antonio Hernández Gilabert
    * Fecha: 05/10/2026
*/

//Modelo

//Negociado
//Recoger los valores del formulario
$valor1 = $_POST['valor1'] ?? 0;
$valor2 = $_POST['valor2'] ?? 0;

//Realizar la opración de resta
$operacion = $_POST['operacion'] ?? 'resta';
$resultado = $valor1 - $valor2;

//vista
include'01-calculadora/views/resultado.view.php';
