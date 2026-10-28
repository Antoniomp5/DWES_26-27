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
    * Tabla  libros:
    *  - id (INT, PRIMARY KEY, AUTO_INCREMENT)
    *  - titulo (VARCHAR(255))
    *  - autor (VARCHAR(255))
    *  - editorial (VARCHAR(255))
    *  - generos 
    *  - precio 
    */

   // cargar librerias
   require_once "libs/functions.php";

   // Models

   // Negociado

   $articulos = get_articulos();

   // Vista
   include "views/index.view.php";