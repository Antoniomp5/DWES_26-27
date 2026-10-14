<?php
/*
    Ejemplo 36. Estructura switch

    if elseif
    
    Descripción: Dada una nota, se ha de devolver
    item de calificación:
        -Insuficiente
        -Suficiente
        -Bien
        -Notable
        -Sobresaliente 

*/


//modelo

//negociado

$nota = 7;

switch(true){

    case ($nota < 5):
        echo "Insuficiente";
        break;

    case ($nota < 6):

        echo "Suficiente";
        break;

    case ($nota < 7):
        echo "Bien";
        break;

    case ($nota < 9):
        echo "Notable";
        break;

    case ($nota <= 10):
        echo "Sobresaliente";
        break;

    
    default;
    echo "La nota debe de ser entre 0 y 10";

}

//vista
include "views/index.view.php";

