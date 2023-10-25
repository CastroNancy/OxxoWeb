<?php
include("./config.php");

// Compruebe si se ha hecho clic en el botón de registro en BPOM
if (isset($_POST['edit_data'])) {
    // recuperar datos del formulario
    $idEmp = $_POST['edit_idEmp'];
    $NombreEmp = $_POST['edit_NombreEmp'];
    $ApellidoEmp = $_POST['edit_ApellidoEmp'];
    $IdSuc = $_POST['edit_IdSuc'];
    $FechaNac = $_POST['edit_FechaNac'];
    $FechaIng = $_POST['edit_FechaIng'];
    $Puesto = $_POST['edit_Puesto'];
    $Sueldo = $_POST['edit_Sueldo'];


    // consulta
    $sql = "UPDATE fmoxxo SET NombreEmp='$NombreEmp', ApellidoEmp='$ApellidoEmp', IdSuc='$IdSuc', FechaNac='$FechaNac', FechaIng='$FechaIng', Puesto='$Puesto', Sueldo='$Sueldo' WHERE idEmp = '$idEmp'";
    $query = mysqli_query($db, $sql);

    // ¿Comprueba si la consulta se guardó correctamente?
    if ($query)
        header('Location: ./index.php?update=sukses');
    else
        header('Location: ./index.php?update=gagal');
} else
    die("Akses dilarang...");
