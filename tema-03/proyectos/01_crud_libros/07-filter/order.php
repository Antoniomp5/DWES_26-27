<?php
    /*
     order.php
     permite orednar los libros existentes
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
// Obtener el criterio de la oredenación
// order.php?criterio=titulo - ordena la tabla por título y de forma ascendente (de momento)
$criterio = htmlspecialchars($_GET['criterio'] ?? null);

// Validar el índice recibido

// Cargar el array de libros
$libros = get_libros();

// Oredenar el array
$array_criterio  = array_column($libros, $criterio);
array_multisort($array_criterio, SORT_ASC, $libros);

// Cargo la vista de muestra con los detalles del libro a editar
require_once 'views/index.view.php';