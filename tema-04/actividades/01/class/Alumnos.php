<?php

Class Alumno
{
    private int $id;
    private string $nombre;
    private string $apedillos;
    private string $poblacion;
    private string $email;
    private int $telefono;
    private string $curso;

    public function __construct
    (
        ?int $id = null,
        ?string $nombre = null, 
        ?string $apedillos = null,
        ?string $poblacion = null,
        ?string $email = null,
        ?int $telefono = null,
        ?string $curso = null
    )
    {
        throw new \Exception('Not implemented');
    }



}