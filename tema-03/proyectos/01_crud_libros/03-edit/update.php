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

// Cargar el array de los libros
$libros = get_libros();


// modelos

//Negocioado
// Obtener el indice desde la url
$indice = htmlspecialchars($_GET['indice'] ?? null);

// Crear un array de libros con los datos del formulario
$titulo = htmlspecialchars($_POST['titulo'] ?? '');
$autor = htmlspecialchars($_POST['autor'] ?? '');
$editorial = htmlspecialchars($_POST['editorial'] ?? '');
$generos = htmlspecialchars($_POST['generos'] ?? '');
$precio = htmlspecialchars($_POST['precio'] ?? '');

// Edición del libro
$editar_libro = [
    'id' => $libros[$indice]['id'],
    'titulo' => $titulo,
    'autor' => $autor,
    'genero' => explode(', ', $generos),
    'editorial' => $editorial,
    'precio' => $precio
];

//actualizo el array
$libros[$indice]= $editar_libro;
//edit.php?indice=0 - edita el primer libro

// Validar el indice recibido




// vistas
require_once "views/view.index.php";