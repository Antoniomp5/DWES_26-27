<?php
    /*
     filter.php
     permite fitral los libros existentes
     @package CRUD Libros
     @author 
     @version

     Tabla libros:
        - id
        - titulo
        - autor
        - editorial
        - generos
        - precios
    

    */

// Cargar librerias
require_once 'libs/functions.php';

// Models

// Negociado
// Obtener el promt de busqueda 
// order.php?prompt=cervantes - extrae todos los libros de cervantes
$criterio = htmlspecialchars($_GET['prompt'] ?? null);

// Validar el índice recibido

// Cargar el array de libros
$libros = get_libros();



// Oredenar el array
$aux = [];

// Cargo la vista de muestra con los detalles del libro a editar
require_once 'views/index.view.php';