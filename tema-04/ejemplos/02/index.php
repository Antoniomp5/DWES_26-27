<?php

echo __DIR__;


require_once 'class/Clientes.php';

//Crear un objeto de la clase cliente

$c1 = new Cliente();

var_dump($c1);

$c1->setNombre('Ladrillos Margari');
$c1->setPoblacion('Ubrique');
$c1->setDni('76323094O');

var_dump($c1);
echo '<br>';
echo $c1->getNombre();
echo '<br>';
echo $c1->getPoblacion();
echo '<br>';
echo $c1->getDni();
