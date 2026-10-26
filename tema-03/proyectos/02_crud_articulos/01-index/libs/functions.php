<?php

/**
 * libreria : functions.php
 * Funciones auxiliares para el proyecto CRUD de libros
 * 
 * Funciones incluidos:
 *  - get_libros()
 *           -id
 *           -Descripcion
 *           -Modelo
 *           -Categoria (Portátil, PC sobremesa, Componente, Pantalla, Impresora)
 *           -Unidades
 *           -Precio
 */


function get_articulos()
{

    $articulos = [
        [
            'id' => 1,
            'Descripcion' => 'Portátil Asus ROG Zephyrus G14 AMD Ryzen 7 32GB RAM',
            'Modelo' => 'ROG Zephyrus G14',
            'Categoria' => 'Portátil',
            'Unidades' => 15,
            'Precio' => 1499.99
        ],
        [
            'id' => 2,
            'Descripcion' => 'Teclado Mecánico Inalámbrico Logitech MX Mechanical',
            'Modelo' => 'MX Mechanical',
            'Categoria' => 'Componente',
            'Unidades' => 45,
            'Precio' => 169.50
        ],
        [
            'id' => 3,
            'Descripcion' => 'Procesador AMD Ryzen 7 7800X3D 4.2GHz',
            'Modelo' => 'Ryzen 7 7800X3D',
            'Categoria' => 'Componente',
            'Unidades' => 22,
            'Precio' => 399.95
        ],
        [
            'id' => 4,
            'Descripcion' => 'Monitor Gaming Curvo Samsung Odyssey G5 27" QHD',
            'Modelo' => 'Odyssey G5 27"',
            'Categoria' => 'Pantalla',
            'Unidades' => 18,
            'Precio' => 229.90
        ],
        [
            'id' => 5,
            'Descripcion' => 'Disco Duro SSD Kingston NV2 2TB PCIe 4.0 NVMe',
            'Modelo' => 'NV2 2TB',
            'Categoria' => 'Componente',
            'Unidades' => 60,
            'Precio' => 114.25
        ],
        [
            'id' => 6,
            'Descripcion' => 'Tarjeta Gráfica Gigabyte NVIDIA GeForce RTX 4070 Super',
            'Modelo' => 'RTX 4070 Super Gaming OC',
            'Categoria' => 'Componente',
            'Unidades' => 8,
            'Precio' => 659.00
        ],
        [
            'id' => 7,
            'Descripcion' => 'Ordenador de Sobremesa HP Slim Desktop Intel Core i5 16GB',
            'Modelo' => 'Slim S01-a0004ns',
            'Categoria' => 'PC sobremesa',
            'Unidades' => 12,
            'Precio' => 549.99
        ],
        [
            'id' => 8,
            'Descripcion' => 'Impresora Multifunción Inyección de Tinta HP DeskJet 2720e',
            'Modelo' => 'DeskJet 2720e',
            'Categoria' => 'Impresora',
            'Unidades' => 30,
            'Precio' => 54.90
        ],
        [
            'id' => 9,
            'Descripcion' => 'Impresora Láser Monocromo Brother con WiFi y Dúplex',
            'Modelo' => 'HL-L2350DW',
            'Categoria' => 'Impresora',
            'Unidades' => 14,
            'Precio' => 119.00
        ],
        [
            'id' => 10,
            'Descripcion' => 'PC Gaming Preconfigurado MSI Corsair Intel i7 32GB RTX 4060',
            'Modelo' => 'MAG Infinite S3',
            'Categoria' => 'PC sobremesa',
            'Unidades' => 5,
            'Precio' => 1199.00
        ]
    ];

    return $articulos;
}
