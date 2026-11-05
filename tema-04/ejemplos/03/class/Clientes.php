<?php

/**
 * Clase Clientes
 * Atributos:
 * nombre
 * población
 * dni
 * 
 * metodos:
 *  - contruct() --inicializa lso atributos
 */

class Cliente
{

    private ?string $nombre;
    private ?string $poblacion;
    private ?string $dni;

    public function __construct(
        ?string $nombre = null,
        ?string $poblacion = null,
        ?string $dni = null
        )
    {
        $this->nombre = $nombre;
        $this->poblacion = $poblacion;
        $this->dni = $dni;
    }

    // getter y setter

    public function getNombre(): string
    {
        return $this->nombre;
    }
    public function getPoblacion(): string
    {
        return $this->poblacion;
    }
    public function getDni(): string
    {
        return $this->dni;
    }

    public function setNombre(string $nombre): void
    {
        $this->nombre = $nombre;
    }
    public function setPoblacion(string $poblacion): void
    {
        $this->poblacion = $poblacion;
    }
    public function setDni(string $dni): void
    {
        $this->dni = $dni;
    }
}
