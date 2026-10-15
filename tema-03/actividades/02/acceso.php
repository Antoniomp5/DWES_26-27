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
// Obtener los detalles del formualrio
$usuario = $_POST['usuario'] ?? '';
$contraseña = $_POST['contraseña'] ?? '';
$email = $_POST['email'] ?? '';
$perfil = $_POST['perfil'] ?? '';

//validación de los datos del formulario

//vista
include "views/acceso.view.php";

