<?php

$server = "localhost";
$user = "root";
$password = "";
$Nombre_database = "bd_oxxo";

$db = mysqli_connect($server, $user, $password, $Nombre_database);

if (!$db)
    die("No se pudo conectar a la base de datos: " . mysqli_connect_error());

    ?>