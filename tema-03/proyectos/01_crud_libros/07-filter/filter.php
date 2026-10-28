<?php
    /*
     filter.php
     permite filtrar los datos, mediante una variable
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
// filter.php?prompt=cervantes - flitra en nombre de Cervantes
$prompt = htmlspecialchars($_GET['prompt'] ?? null);

// Validar el índice recibido

// Cargar el array de libros
$libros = get_libros();

// Oredenar el array
$aux = [];

foreach($libros as $libro){
    if(array_search($prompt, $libro) !== false){
        $aux[] = $libro;

    }

}

$libros = $aux;

// Cargo la vista de muestra con los detalles del libro a editar
require_once 'views/index.view.php';