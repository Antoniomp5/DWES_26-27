<?php

/*
    Archivo: TablaAlumnos.php
    Descripción: Clase TablaAlumnos, se trata de un array de objetos de la clase Alumno.
    Características: POO sin encapsulamiento.
    Atributos:
        - talumno []
    Métodos: 
        - constructor
        - getCursos()
        - getAsignaturas()
        - addAlumnos()
        - get_indice_asignaturas_a_nombres()
*/

class TablaAlumnos
{
    public ?array $talumno;

    public function __construct()
    {
        $this->talumno = [];
    }

    /*
        Método getCursos()
        Descripción: Devuelve un array con todos los Cursos disponibles.
        Con este array tengo que generar el select dinámico del campo curso.
        Cuando estemos trabajando con base de datos: SELECT id, curso FROM cursos ORDER BY id.
    */
    public static function getCursos(): ?array
    {
        $cursos = [
            '1ºSMR', // 0
            '2ºSMR', // 1
            '1ºDAW', // 2
            '2ºDAW', // 3
            '1ºAD',  // 4
            '2ºAD'   // 5
        ];

        return $cursos;
    }

    /*  
        Método getAsignaturas()
        Descripción: Devuelve un array con todas las asignaturas disponibles.
        Con este array tengo que generar una lista de checkbox dinámico del campo asignaturas.
        Cuando estemos trabajando con base de datos: SELECT id, asignatura FROM asignaturas ORDER BY id.
    */
    public static function getAsignaturas(): ?array
    {
        $asignaturas = [
            'Programación',                         // 0
            'Bases de Datos',                       // 1
            'Lenguajes de Marcas',                  // 2
            'Entornos de Desarrollo',               // 3
            'Sistemas Informáticos',                // 4
            'Desarrollo Web en Entorno Cliente',    // 5
            'Desarrollo Web en Entorno Servidor',   // 6
            'Despliegue de Aplicaciones Web'        // 7
        ];

        return $asignaturas;
    }

    /*
        Método addAlumnos()
        Descripción: Carga alumnos de prueba en el array $talumno
    */
    public function addAlumnos(): void
    {
        $this->talumno[] = new Alumno(
            1,
            'Antonio',
            'Hernández Gilabert',
            'antonio.hernandez@email.com',
            new DateTime('2004-03-15'),
            3,
            [5, 6, 7]
        );

        $this->talumno[] = new Alumno(
            2,
            'Laura',
            'Martínez Gómez',
            'laura.martinez@email.com',
            new DateTime('2005-07-22'),
            2, 
            [0, 1, 2, 3]
        );

        $this->talumno[] = new Alumno(
            3,
            'Carlos',
            'Sánchez Ruiz',
            'carlos.sanchez@email.com',
            new DateTime('2006-11-04'),
            0,
            [2, 4]
        );

        $this->talumno[] = new Alumno(
            4,
            'Elena',
            'Navarro Torres',
            'elena.navarro@email.com',
            new DateTime('2003-01-30'),
            3, 
            [1, 5, 6]
        );

        $this->talumno[] = new Alumno(
            5,
            'Javier',
            'Romero Díaz',
            'javier.romero@email.com',
            new DateTime('2005-09-12'),
            1, 
            [1, 4, 7]
        );

        $this->talumno[] = new Alumno(
            6,
            'Sofía',
            'Moreno Castro',
            'sofia.moreno@email.com',
            new DateTime('2004-06-18'),
            4,
            [1, 2]
        );
    }

    /*
        Método get_indice_asignaturas_a_nombres()
        Descripción: Devuelve un array con los nombres de las asignaturas a partir de los índices
    */
    public function get_indice_asignaturas_a_nombres(array $indices): array
    {
        $asignaturas = self::getAsignaturas();
        $nombres = [];

        foreach ($indices as $indice) {
            if (isset($asignaturas[$indice])) {
                $nombres[] = $asignaturas[$indice];
            }
        }

        return $nombres;
    }
}
