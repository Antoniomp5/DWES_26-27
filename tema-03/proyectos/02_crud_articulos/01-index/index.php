<?php
    /*
     index.php
    
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
$articulos = get_articulos();

// vistas
include "views/view.index.php";
