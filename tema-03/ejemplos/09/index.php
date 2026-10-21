<?php
/*
    Tipos de array:
        -escalares o indexsados

*/



//modelo

//Negociado
function sumar_dos($x){
    $x= 2;
    return $x;
}

$a = 2;
echo sumar_dos($a);
echo $a;
//vista
include "views/index.view.php";

