<?php

/**
 * @fichero: Tarticulos.php
 * @Autor: Antonio Hernández Gilabert
 * @fecha:
 * @proyecto0.1
 * 
 * @Atrubitos
 *  -Tarticulos = []
 * 
 *  @métodos:
 *  - cosntructor: párametros opcionales
 *  - getter y setter
 *  - getMarcas
 *  - getCategorias
 */

// cargar clases

class Tarticulos
{
    private ?array $tarticulos;

    public function __construct()
    {
        $this->tarticulos = [];
    }

    public function setTarticulos(array $tarticulos): void
    {
        $this->tarticulos = $tarticulos;
    }

    public function getTarticulos(): ?array
    {
        return $this->tarticulos;
    }

    public static function getMarcas(): array
    {
        $marcas = [
            'Samsung',
            'Apple',
            'Xiaomi',
            'Sony',
            'LG',
            'Philips',
            'HP',
            'Dell',
            'Lenovo',
            'Asus'
        ];

        return $marcas;
    }
    public static function getCategorias(): array
    {
        $categorias = [
            'Informática',
            'Telefonía',
            'Electrodomésticos',
            'Imagen y sonido',
            'Accesorios',
            'Periféricos',
            'Fotografía',
            'Mobiliario',
            'Iluminación',
            'Otros'
        ];

        return $categorias;
    }

    /**
     * Método getArticulos()
     * Metodo que devuelve todos los articulos
     */

    public function addArticulos(): ?array
    {
        // Crear artículos
        $articulo = [];

        $articulo = new Articulo(
            1,
            'Smartphone Samsung Galaxy s21',
            's21',
            0,
            [0, 1],
            5,
            12.45
        );

        $this->tarticulos[] = $articulo;

        $articulo = new Articulo(
            2,
            'Portátil Apple MacBook Air',
            'MacBook Air M2',
            1,
            [2, 3],
            10,
            899.99
        );

        $this->tarticulos[] = $articulo;

        $articulo = new Articulo(
            3,
            'Smartphone Xiaomi Redmi Note 13',
            'Redmi Note 13',
            2,
            [0, 1],
            15,
            249.99
        );

        $this->tarticulos[] = $articulo;

        $articulo = new Articulo(
            4,
            'Televisor Sony Bravia',
            'Bravia XR',
            3,
            [4, 5],
            8,
            749.99
        );

        $this->tarticulos[] = $articulo;

        $articulo = new Articulo(
            5,
            'Monitor LG UltraWide',
            'UltraWide 29WQ600',
            4,
            [2, 3],
            12,
            189.99
        );
        $this->tarticulos[] = $articulo;

        $articulo = new Articulo(
            6,
            'Auriculares inalámbricos JBL Tune 510BT',
            'Tune 510BT',
            8,
            [4, 5],
            20,
            39.99
        );

        $this->tarticulos[] = $articulo;

        return $this->tarticulos;
    }
    /**
     * Método get_indice_Categorias()
     * Pasa el indice a nombres
     */

    public function get_indice_Categorias_a_Nombres(array $categorias): array
    {
        $categorias_nombres = [];
        $categorias_todas = self::getCategorias();

        foreach ($categorias as $indice) {
            if (isset($categorias_todas[$indice])) {
                $categorias_nombres[] = $categorias_todas[$indice];
            }
        }

        return $categorias_nombres;
    }
}
