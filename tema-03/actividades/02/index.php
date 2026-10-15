<?php
/*
    Ejemplo 32. Formulario de registro con acceso según el usuario

   Formualrio de registo:
   Nombre de usuario
   Contraseña
   Email
   Perfiles de usuario: Admin, edit, user

   Tipo de pefiles y privilegios:
    Admin: añadir, eliminar, actualizar, consultar.
    Edit: actualizar, consultar, añadir.
    User: consultar.

*/


//modelo

//negociado
// crear lista de perfiles

$perfiles = ['admin', 'edit', 'user'];

//vista
include "views/index.view.php";

