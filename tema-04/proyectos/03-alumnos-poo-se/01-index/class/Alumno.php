<?php

/*
    fichero: Alumno.php
    @autor: Antonio Hernández Gilabert
    @fecha: 
    @proyecto: proyecto41
*/

/**
 * Clase Alumno
 *
 * @description Clase que representa un alumno
 * Caracteristicas: POO sin encapusulamiento.
 * 
 * @abributos:
 *  - $id: Identificador único del artículo.
 *  - $nombre: nombre del alumno.
 *  - $apedillos: apedillos del alumno
 *  - $email: email del alumno
 *  - $f_nacimiento: fecha de nacimiento del alumno
 *  - $cursos: curso del alumno
 *  - $asignaturas: asignaturas del alumno
 * 
 * @métodos:
 *  - getEdad: Obtener la edad del Alumno
 * 
 */

class Alumno
{

    public ?int $id;
    public ?string  $nombre;
    public ?string $apedillos;
    public ?string $email;
    public ?DateTime $f_nacimiento;
    public ?int $cursos;
    public ?array $asignaturas;

    // Método constructor con encapsulamiento
    public function __construct(
        ?int $id = null,
        ?string  $nombre = null,
        ?string $apedillos = null,
        ?string $email = null,
        ?DateTime $f_nacimiento = null,
        ?int $cursos = null,
        ?array $asignaturas = null
    ) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->apedillos = $apedillos;
        $this->email = $email;
        $this->f_nacimiento = $f_nacimiento;
        $this->cursos = $cursos;
        $this->asignaturas = $asignaturas;
    }

    // Metodo getEdad

    public function getEdad (): ?int
    {
        if ($this->f_nacimiento === null){
            return null;
        }

        $fecha_actual = new DateTime();
          
        $edad = $fecha_actual->diff($this->f_nacimiento);
        return $edad->y;
    }
}
