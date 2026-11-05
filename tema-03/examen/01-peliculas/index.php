<?php
/**
 * @autor: Antonio Hernádnez Gilabert
 * @examen: Tema 03 Programación Basada en Lenguaje de Marcas con Código Embebido - CRUD Películas
 */

//libs
require_once 'libs/functions.php';

//models

//negociado
$peliculas = get_peliculas();

//vista

include "views/index.view.php";