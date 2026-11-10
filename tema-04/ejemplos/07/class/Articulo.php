<?php

/**
 * clase articulo
 */

class Articulo
{
    private int $id;
    private string $descripcion;
    private array $categoria;
    private int $unidades;
    private float $precio;

    public function __construct(
        ?int $id = null,
        ?string $descripcion = null,
        ?array $categoria = [],
        ?int $unidades = null,
        ?float $precio = null

    ) {
        $this->id = $id;
        $this->descripcion = $descripcion;
        $this->categoria = $categoria;
        $this->id = $id;
        $this->id = $id;
    }
}
