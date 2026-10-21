<?php

$email = htmlspecialchars($_GET['email']);
$password = htmlspecialchars($_GET['password']);

echo "<h1>Datos rebidos</h1>";
echo "<p>Email: $email</p>";
echo "<p>Password: $password</p>";