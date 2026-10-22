<?php

/**
 * libreria : functions.php
 * Funciones auxiliares para el proyecto CRUD de libros
 * 
 * Funciones incluidos:
 *  - get_libros()
 *           - id
 *           - titulo
 *           - autor
 *           - editorial
 *           - generos
 *           - precios
 *            
 */



function get_libros(){

    $libros = [
        [
            'id' => 1,
            'titulo' => 'Cien años de soledad',
            'autor' => 'Gabriel García Márquez',
            'genero' => 'Realismo mágico',
            'editorial' => 'Editorial Sudamericana',
            'precio' => 19.99
        ],
        [
            'id' => 2,
            'titulo' => 'Don Quijote de la Mancha',
            'autor' => 'Miguel de Cervantes',
            'genero' => 'Novela de aventuras',
            'editorial' => 'Espasa-Calpe',
            'precio' => 24.50
        ],
        [
            'id' => 3,
            'titulo' => '1984',
            'autor' => 'George Orwell',
            'genero' => 'Distopía',
            'editorial' => 'Debolsillo',
            'precio' => 12.95
        ],
        [
            'id' => 4,
            'titulo' => 'El principito',
            'autor' => 'Antoine de Saint-Exupéry',
            'genero' => 'Literatura infantil / Filosófico',
            'editorial' => 'Salamandra',
            'precio' => 9.90
            
        ],
        [
            'id' => 5,
            'titulo' => 'Ficciones',
            'autor' => 'Jorge Luis Borges',
            'genero' => 'Antología de cuentos',
            'editorial' => 'Alianza Editorial',
            'precio' => 14.25
        ]
    ];

    return $libros;
}

// Función que devuelve el último id
function obtener_id_nuevo_libro($libros = []){
    $ultimo_libro = end($libros);

    $ultimo_id = $ultimo_libro['id'];

    return $ultimo_id + 1;


}

