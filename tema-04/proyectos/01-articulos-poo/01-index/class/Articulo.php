<?php

/**
 * @fichero: Articulo.php
 * @Autor: Antonio Hernández Gilabert
 * @fecha:
 * @proyecto0.1
 */

/**
 * Clase Articulo
 * @descripción: Clase que representa un articulo con propiedades
 * métodos para mejorar su información.
 * 
 * @atributos:
 *  - $id: Identificador unico del árticulo
 *  - $descripcion: descripción de cada árticulo
 *  - $modelo: modelo del árticulo
 *  - $marca: marca del árticulo
 *  - $categoria: selecciona las categorias del árticulo
 *  - $unidad: las unidades del árticulo
 *  - $precio: el precio del árticulo
 * 
 * @métodos:
 *  - cosntructor: párametros opcionales
 *  - getter y setter
 */

class Articulo
{
    // Atributos
    private ?int $id;
    private ?string $descripcion;
    private ?string $modelo;
    private ?string $marca;
    private ?array $categoria;
    private ?int $unidad;
    private ?float $precio;

    //Contructor
    public function __construct(
        ?int $id = null,
        ?string $descripcion = null,
        ?string $modelo = null,
        ?string $marca = null,
        array $categoria = [],
        ?int $unidad = null,
        ?float $precio = null
    )
    {
        $this->id = $id;
        $this->descripcion = $descripcion;
        $this->modelo = $modelo;
        $this->marca = $marca;
        $this->categoria = $categoria;
        $this->unidad = $unidad;
        $this->precio = $precio;
    }

    // Getters y setters
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getId(): int
    {
        return $this->id;
    }
    public function setDescripcion(string $descripcion): void
    {
        $this->descripcion = $descripcion;
    }

    public function getDescripcion(): string
    {
        return $this->descripcion;
    }
    public function setModelo(string $modelo): void
    {
        $this->modelo = $modelo;
    }

    public function getModelo(): ?string
    {
        return $this->modelo;
    }

    // Getter y Setter de marca
    public function setMarca(string $marca): void
    {
        $this->marca = $marca;
    }

    public function getMarca(): ?string
    {
        return $this->marca;
    }

    // Getter y Setter de categoria
    public function setCategoria(array $categoria): void
    {
        $this->categoria = $categoria;
    }

    public function getCategoria(): ?array
    {
        return $this->categoria;
    }

    // Getter y Setter de unidad
    public function setUnidad(int $unidad): void
    {
        $this->unidad = $unidad;
    }

    public function getUnidad(): ?int
    {
        return $this->unidad;
    }

    // Getter y Setter de precio
    public function setPrecio(float $precio): void
    {
        $this->precio = $precio;
    }

    public function getPrecio(): ?float
    {
        return $this->precio;
    }
}
