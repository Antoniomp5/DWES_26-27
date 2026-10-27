<?php
    /*
     delete.php
     permite eliminar un libro existente
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
// Obtener el indice del libro a eliminar desde la URL
// edit.php?indice=0 - elimino el  primer libro
$indice = htmlspecialchars($_GET['indice'] ?? null);

// Validar el índice recibido

// Cargar el array de libros
$libros = get_libros();

// Obtenemos el libro a eliminar
unset($libros[$indice]);

// Cargo la vista de edición con los detalles del libro a editar
require_once 'views/index.view.php';
