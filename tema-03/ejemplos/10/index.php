<?php


require_once "libs/html.php";
// Imprime un título de nivel 2 con las clases CSS tit-nav y text-center
$array['contenido'] = 'Titulo nivel 2';
$array['etiqueta'] = 'h2';
$array['contenido'] = '"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."';
$array['etiqueta'] = 'p';
$array['clase'] = 'text-center';
eti_html($array);
// controlador
include "views/view.index.php";