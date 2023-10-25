<?php
include("./config.php");

// Compruebe si se ha hecho clic en el botón de registro en BPOM
if (isset($_POST['tambah'])) {
    // recuperar datos del formulario
    $NombreEmp = $_POST['NombreEmp'];
    $ApellidoEmp = $_POST['ApellidoEmp'];
    $IdSuc = $_POST['IdSuc'];
    $FechaNac = $_POST['FechaNac'];
    $FechaIng = $_POST['FechaIng'];
    $Puesto = $_POST['Puesto'];
    $Sueldo = $_POST['Sueldo'];

    // consulta
    $sql = "INSERT INTO fmoxxo(NombreEmp, ApellidoEmp, IdSuc, FechaNac, FechaIng, Puesto,Sueldo)
    VALUES('$NombreEmp', '$ApellidoEmp', '$IdSuc', '$FechaNac', '$FechaIng', '$Puesto','$Sueldo')";
    $query = mysqli_query($db, $sql);

    // ¿Comprueba si la consulta se guardó correctamente?
    if ($query)
        header('Location: ./index.php?status=sukses');
    else
        header('Location: ./index.php?status=gagal');
} else
    die("Acceso prohibido...");
