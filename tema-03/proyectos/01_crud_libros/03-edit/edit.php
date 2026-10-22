<?php
/*
     edit.php
     Permite editar los libros existentes y creados
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

// cargar librerias
require_once "libs/functions.php";

// modelos

//Negocioado
// Obtener el indice desde la url
$indice = htmlspecialchars($_GET['indice'] ?? null);

//edit.php?indice=0 - edita el primer libro

// Validar el indice

// Cargar el array de los libros
$libros = get_libros();

$libro = $libros['indice'];


// vistas
include "views/view.index.php";
