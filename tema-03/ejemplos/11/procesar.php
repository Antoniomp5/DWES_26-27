<?php

$email = htmlspecialchars($_POST['email']);
$password = htmlspecialchars($_POST['password']);

echo "<h1>Datos rebidos</h1>";
echo "<p>Email: $email</p>";
echo "<p>Password: $password</p>";