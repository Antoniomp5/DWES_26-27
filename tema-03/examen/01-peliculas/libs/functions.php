<?php
/**
 * @autor: Antonio Hernádnez Gilabert
 * @examen: Tema 03 Programación Basada en Lenguaje de Marcas con Código Embebido - CRUD Películas
 */

function get_peliculas() {
    
    $peliculas = [
        [
            'id' => 1,
            'titulo' => "Avatar",
            'idioma' => "ingles",
            'director' => "James Cameron",
            'generos' => "Aventura/Acción",
            'anno' => 2009,
            'duracion' => 2,
            'recaudado' => 1000 
        ],
        [
            'id' => 2,
            'titulo' => "Titanic",
            'idioma' => "ingles",
            'director' => "James Cameron",
            'generos' => "Romance",
            'anno' => 1997,
            'duracion' => 3,
            'recaudado' => 659 
        ],
        [
            'id' => 3,
            'titulo' => "El Origen (Inception)",
            'idioma' => "ingles",
            'director' => "Christopher Nolan",
            'generos' => "Ciencia Ficcion",
            'anno' => 2010,
            'duracion' => 2,
            'recaudado' => 292
        ],
        [
            'id' => 4,
            'titulo' => "Parasitos",
            'idioma' => "coreano",
            'director' => "Bong Joon-ho",
            'generos' => "Drama",
            'anno' => 2019,
            'duracion' => 2,
            'recaudado' => 53
        ],
        [
            'id' => 5,
            'titulo' => "El Padrino",
            'idioma' => "ingles",
            'director' => "Francis Ford Coppola",
            'generos' => "Crimen",
            'anno' => 1972,
            'duracion' => 3,
            'recaudado' => 134
        ],
        [
            'id' => 6,
            'titulo' => "El Laberinto del Fauno",
            'idioma' => "español",
            'director' => "Guillermo del Toro",
            'generos' => "Fantasia",
            'anno' => 2006,
            'duracion' => 2,
            'recaudado' => 37 
        ]
    ];

    return $peliculas;
}
function obtener_id_nueva_pelicula($peliculas = []){

    $ultima_pelicula = end($peliculas);

    $ultimo_id = $ultima_pelicula['id'];
    return $ultimo_id + 1;
}


