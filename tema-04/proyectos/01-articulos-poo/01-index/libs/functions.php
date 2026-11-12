<?php
    /**
     *     librería: functions.php
     *      Funciones auxiliares para el proyecto CRUD de libros.

     *      Funciones incluidas:
     *      - get_libros(): Devuelve un array con todos los libros creados.
    */

function get_articulos() {
    $articulos = [
        [
            "id" => 1,
            "descripcion" => "Ordenador portátil",
            "modelo" => "HP Pavilion 15",
            "categoria" => "Ordenadores",
            "unidad" => 10,
            "precio" => 699.99
        ],
        [
            "id" => 2,
            "descripcion" => "Teclado mecánico",
            "modelo" => "Logitech G413",
            "categoria" => "Periféricos",
            "unidad" => 15,
            "precio" => 79.99
        ],
        [
            "id" => 3,
            "descripcion" => "Ratón inalámbrico",
            "modelo" => "Logitech M185",
            "categoria" => "Periféricos",
            "unidad" => 25,
            "precio" => 19.99
        ],
        [
            "id" => 4,
            "descripcion" => "Monitor de 24 pulgadas",
            "modelo" => "Samsung Essential",
            "categoria" => "Monitores",
            "unidad" => 8,
            "precio" => 149.99
        ],
        [
            "id" => 5,
            "descripcion" => "Disco SSD de 1 TB",
            "modelo" => "Kingston NV2",
            "categoria" => "Almacenamiento",
            "unidad" => 20,
            "precio" => 69.99
        ],
        [
            "id" => 6,
            "descripcion" => "Memoria RAM de 16 GB",
            "modelo" => "Corsair Vengeance",
            "categoria" => "Componentes",
            "unidad" => 12,
            "precio" => 44.99
        ],
        [
            "id" => 7,
            "descripcion" => "Tarjeta gráfica",
            "modelo" => "NVIDIA GeForce RTX 4060",
            "categoria" => "Componentes",
            "unidad" => 5,
            "precio" => 329.99
        ],
        [
            "id" => 8,
            "descripcion" => "Impresora multifunción",
            "modelo" => "HP DeskJet 2820e",
            "categoria" => "Impresoras",
            "unidad" => 7,
            "precio" => 59.99
        ],
        [
            "id" => 9,
            "descripcion" => "Auriculares inalámbricos",
            "modelo" => "Sony WH-CH520",
            "categoria" => "Audio",
            "unidad" => 14,
            "precio" => 49.99
        ],
        [
            "id" => 10,
            "descripcion" => "Webcam Full HD",
            "modelo" => "Logitech C920",
            "categoria" => "Periféricos",
            "unidad" => 9,
            "precio" => 69.99
        ]
    ];

    return $articulos;
}

