<?php
/*
    Tipos de array:
        -escalares o indexsados

*/



//modelo

//Negociado
include "libs/matematicas.php";

$suma = sumar (3, 4);
echo $suma;
$resta = restar (3, 4);
echo $resta;
$producto = multiplicar (3, 4);
echo $producto;
$cociente = dividir (3, 4);
echo $cociente;

//vista
include "views/index.view.php";

