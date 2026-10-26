<?php
/*
     create.php
     Permite crear nuevos libros
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
//Obtener los datos del formulario
$titulo = htmlspecialchars($_POST['titulo'] ?? '');
$autor = htmlspecialchars($_POST['autor'] ?? '');
$editorial = htmlspecialchars($_POST['editorial'] ?? '');
$generos = htmlspecialchars($_POST['generos'] ?? '');
$precio = htmlspecialchars($_POST['precio'] ?? '');


// Acceso a la validación de los datos 

// Crear array asociativo con los datos del nuevo libro
$nuevo_libro = [
    'id' => $nuevo_libro_id,
    'titulo' => $titulo,
    'autor' => $autor,
    'genero' => $generos,
    'editorial' => $editorial,
    'precio' => $precio
];

// Nuevos elementos en el array de libros
$libros[]= $nuevo_libro;


// vistas
include "views/view.index.php";
