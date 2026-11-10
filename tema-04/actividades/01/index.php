<?php

require_once 'Alumno.php';

$alumno1 = new Alumno();

$alumno2 = new Alumno(
    1,
    'Antonio',
    'Hernández Gilabert',
    'Cádiz',
    'antonio@email.com',
    660123456,
    '2º DAW'
);

$alumno1->setId(2);
$alumno1->setNombre('María');
$alumno1->setApellidos('López Martínez');
$alumno1->setPoblacion('Alicante');
$alumno1->setEmail('maria@email.com');
$alumno1->setTelefono(660654321);
$alumno1->setCurso('1º SMR');

// Uso de getters para mostrar los valores
echo "Alumno 1: " . $alumno1->getNombre() . " " . $alumno1->getApellidos() .
     " - " . $alumno1->getPoblacion() . " - " . $alumno1->getEmail() .
     " - " . $alumno1->getTelefono() . " - " . $alumno1->getCurso() . PHP_EOL;

echo "Alumno 2: " . $alumno2->getNombre() . " " . $alumno2->getApellidos() .
     " - " . $alumno2->getPoblacion() . " - " . $alumno2->getEmail() .
     " - " . $alumno2->getTelefono() . " - " . $alumno2->getCurso() . PHP_EOL;