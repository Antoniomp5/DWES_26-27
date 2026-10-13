<?php
/*
    Ejemplo 32. if, else 

    la calificación será
        -suspenso
        -suficiente
        -bien
        -notable
        -sobresaliente

*/

$nota = 7;

if ($nota < 5){
    echo "Insuficiente";
} elseif ($nota < 6) {
    echo "Suficiente";
} elseif ($nota < 7) {
    echo "Bien";
} elseif ($nota < 9) {
    echo "Notable";
} elseif ($nota <= 10){
    echo "Sobresaliente";

} else {
    echo "Error: la nota debe de estar entre 0 y 10";
}