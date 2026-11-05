<?php


//Rutas absolutas
require_once  __DIR__ .'/class/Clientes.php';

//Crear un objeto de la clase cliente
//Infosierra, Ubrique, 46729123I
$c1 = new Cliente('Infosierra', 'Ubrique', '46729123I');


var_dump($c1);

echo $c1->getNombre();
echo '<br>';
echo $c1->getPoblacion();
echo '<br>';
echo $c1->getDni();

$c2 = new Cliente();

var_dump($c2);

echo $c2->getNombre();
echo '<br>';
echo $c2->getPoblacion();
echo '<br>';
echo $c2->getDni();
