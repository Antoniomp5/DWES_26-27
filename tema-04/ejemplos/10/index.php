<?php
/**
 * clase Padre: producto
 * clase Hija: libro sin constructor
 */

require_once 'class/Producto.php';

$libro1 = new Libro(1, "El Quijote", 19.99, "Categoría: Novela", 5);

echo $libro1->getResumen() . '<br>';
echo $libro1->getcategoria() . '<br>';

var_dump($libro1);