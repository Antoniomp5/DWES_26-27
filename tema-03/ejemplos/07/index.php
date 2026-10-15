<?php
/*
    Tipos de array:
        -escalares o indexsados

*/



//modelo

//Negociado
//$colores = array("rojo", "verde", "azul", "amarillo");

$colores = ["rojo", "verde", "azul", "amarillo"];

echo $colores[0] . "<br>"; // rojo

for ($i = 0; $i < count($colores); $i++){
    echo $colores[$i] . "<br>";
}

foreach($colores as $color){
    echo $color . "<br>";
}

$colores[] = "naranja";

unset($colores[1]);

foreach($colores as $indice => $color){
    echo "Índice: ", $indice, "; Color: ", $color . "<br>";
}

$colores[0] = "violeta";
//vista
include "views/index.view.php";

