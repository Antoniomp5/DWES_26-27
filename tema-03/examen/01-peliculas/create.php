<?php

/**
 * @autor: Antonio Hernádnez Gilabert
 * @examen: Tema 03 Programación Basada en Lenguaje de Marcas con Código Embebido - CRUD Películas
 */

// Cargar librerias
require_once 'libs/functions.php';

// Models

// Negociado

// Extraer los datos del formulario
$titulo = htmlspecialchars($_POST['titulo'] ?? '');
$idioma = htmlspecialchars($_POST['idioma'] ?? '');
$director = htmlspecialchars($_POST['director'] ?? '');
$generos = htmlspecialchars($_POST['generos'] ?? '');
$anno = htmlspecialchars($_POST['anno'] ?? '');
$duracion = htmlspecialchars($_POST['duracion'] ?? '');
$recaudado = htmlspecialchars($_POST['recaudado'] ?? '');


$peliculas= get_peliculas();

$peli_id = obtener_id_nueva_pelicula();


$nueva_pelicula = [
$id= $peli_id, 
$titulo = 'titulo',
$idioma = 'idioma',
$director = 'director',
$generos= 'generos',
$anno= 'duracion',
$duracion= 'duracion',
$recaudado= 'recaudado',
];

// Agregar el nueva pelicula
$peliculas[] = $nueva_pelicula;



// Views
include 'views/index.view.php';
