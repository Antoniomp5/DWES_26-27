<?php

Class Persona
{
    public string $nombre;
    public int $edad;
    public string $sexo;

    public function __construct()
    {
        $this->nombre = '';
        $this->edad = '';
        $this->sexo = '';

    }



}

//Creamos un objeto a partir de la clase persona

$persona1 = new Persona();