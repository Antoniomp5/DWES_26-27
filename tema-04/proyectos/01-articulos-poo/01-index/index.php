<?php

/**
 * index.php
 *
 * Página principal del proyecto CRUD de artículos.
 * Muestra una lista de artículos y permite agregar, editar y eliminar libros.
 *
 * @package    CRUD Artículos
 * @author     Antonio Hernández Gilabert
 * @version    1.0
 *
 * Muestra cada articulo de la tabla articulos 
 *
 */

// cargar clases
require_once __DIR__ . '/class/Articulo.php';
require_once __DIR__ . '/class/Tarticulos.php';

// Models

// Negociado
// Crear un array de objetos de las clase Atriculo

$tabla_articulos = new Tarticulos();

//añadir los articulos

$tabla_articulos->addArticulos();

// obtener el array de articulos

$articulos = $tabla_articulos->getTarticulos();

//Obtener marcas
$marcas = Tarticulos::getMarcas();

//Obtener categorias
$categorias = Tarticulos::getCategorias();



// Vista
include __DIR__ . "/views/index.view.php";
