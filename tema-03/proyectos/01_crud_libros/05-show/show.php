<?php
    /*
     show.php
     permite mostrar un libro existente
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
// Obtener el indice del libro a mostrar desde la URL
// edit.php?indice=0 - muestro el  primer libro
$indice = htmlspecialchars($_GET['indice'] ?? null);

// Validar el índice recibido

// Cargar el array de libros
$libros = get_libros();

// Obtenemos el libro a mostar
$libro = $libros[$indice];

// Cargo la vista de muestra con los detalles del libro a editar
require_once 'views/show.view.php';